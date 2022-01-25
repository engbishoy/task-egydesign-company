<?php

namespace Modules\Permission\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Modules\Core\Http\Controllers\AppController;
use Modules\Permission\Services\PermissionService;
use Modules\Permission\Transformers\PermissionResource;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends AppController
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $this->setMessages([
            //swal
            'swal-delete-prompt' => Lang::get('core::global.swal.swal-delete-prompt'),
            'swal-delete-prompt-single' => Lang::get('core::global.swal.swal-delete-prompt-single'),
            'swal-delete-btn-confirm' => Lang::get('core::global.swal.swal-delete-btn-confirm'),
            'swal-delete-btn-discard' => Lang::get('core::global.swal.swal-delete-btn-discard'),
        ]);
        return view('permission::dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'POST',
            'dt_modal_submit_url' => route('roles.store')
        ]);
        $permissions = PermissionResource::collection(Permission::all());
        return view('permission::dashboard.modals.add', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // TODO: Add Validation and translated messages
        if(Role::where('name', $request->name)->first()){
            return response()->json(['errors'=>['message' => 'Role Already exists']],422);
        }
        $role = Role::create(['guard_name' => 'dashboard', 'name' => strtolower($request->name)]);
        $permissions = [];
        foreach (json_decode($request->permissions) as $key => $permission) {
            $permissions[$key] = $permission->name;
        }
        $role->syncPermissions($permissions);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-added-row')],201);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Role $role)
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'PUT',
            'dt_modal_submit_url' => route('roles.update', [$role->id]),
        ]);
        $permissions = PermissionResource::collection(Permission::orderBy('name')->get());
        $rolePermissions = PermissionResource::collection($role->permissions);
        return view('permission::dashboard.modals.edit', compact('role','permissions', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Role $role)
    {
        if($request->name != $role->name && Role::where('name', $request->name)->first()){
            return response()->json(['errors'=>['message' => 'Role Already exists']],422);
        }
        $permissions = [];
        foreach (json_decode($request->permissions) as $key => $permission) {
            $permissions[$key] = $permission->name;
        }

        if($request->name != $role->name){
            $role->update([
                'name' => $request->name
            ]);
        }

        $role->syncPermissions($permissions);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-updated-row')],200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Role $role)
    {
        $role->delete();
        PermissionService::clearCache();        
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-row')], 200);
    }

    public function destroyMany(Request $request){
        Role::destroy($request->ids);
        PermissionService::clearCache();        
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-rows')],200);
    }
}
