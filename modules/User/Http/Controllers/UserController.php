<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Modules\User\Entities\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Spatie\Permission\Models\Permission;
use Modules\User\Http\Requests\UserRequest;
use Illuminate\Contracts\Support\Renderable;
use Modules\Core\Http\Controllers\AppController;
use Modules\Permission\Transformers\RoleResource;
use Modules\User\Http\Requests\UpdateUserRequest;
use Modules\Permission\Transformers\PermissionResource;

class UserController extends AppController
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
            'swal-hard-delete-prompt' => Lang::get('core::global.swal.swal-hard-delete-prompt'),
            'swal-hard-delete-prompt-single' => Lang::get('core::global.swal.swal-hard-delete-prompt-single'),
            'swal-delete-btn-confirm' => Lang::get('core::global.swal.swal-delete-btn-confirm'),
            'swal-delete-btn-discard' => Lang::get('core::global.swal.swal-delete-btn-discard'),

            'swal-restore-prompt' => Lang::get('core::global.swal.swal-restore-prompt'),
            'swal-restore-prompt-single' => Lang::get('core::global.swal.swal-restore-prompt-single'),
            'swal-restore-btn-confirm' => Lang::get('core::global.swal.swal-restore-btn-confirm'),
            'swal-restore-btn-discard' => Lang::get('core::global.swal.swal-restore-btn-discard'),
        ]);
        return view('user::dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'POST',
            'dt_modal_submit_url' => route('users.store')
        ]);
        $roles = RoleResource::collection(Role::whereNotIn('name',['support'])->with('permissions')->orderBy('name')->get());
        $permissions = PermissionResource::collection(Permission::orderBy('name')->get());
        return view('user::dashboard.modals.add', compact('roles','permissions'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(UserRequest $request)
    {
        $roles = [];
        if($request->roles){
            foreach (json_decode($request->roles) as $key => $role) {
                array_push($roles, $role->value);
            }
        }

        $permissions = [];
        if($request->direct_permissions){
            foreach (json_decode($request->direct_permissions) as $key => $permission) {
                array_push($permissions, $permission->name);
            }
        }
        $request->merge(['password' => Hash::make($request->password)]);
        $user = User::create($request->only('name','email','password'));
        
        if(!empty($roles))
            $user->assignRole($roles);
        if(!empty($permissions))
            $user->givePermissionTo($permissions);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-added-row')],201);
    }

    
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(User $user)
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'PUT',
            'dt_modal_submit_url' => route('users.update', [$user->id]),
        ]);
        $roles = RoleResource::collection(Role::whereNotIn('name',['support'])->with('permissions')->orderBy('name')->get());
        $permissions = PermissionResource::collection(Permission::orderBy('name')->get());
        $userRoles = RoleResource::collection($user->roles()->with('permissions')->orderBy('name')->get());
        $userDirectPermissions = PermissionResource::collection($user->getDirectPermissions()->sortBy('name'));
        return view('user::dashboard.modals.edit', compact('user','roles','permissions','userRoles','userDirectPermissions'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $roles = [];
        if($request->roles){
            foreach (json_decode($request->roles) as $key => $role) {
                array_push($roles, $role->value);
            }
        }

        $permissions = [];
        if($request->direct_permissions){
            foreach (json_decode($request->direct_permissions) as $key => $permission) {
                array_push($permissions, $permission->name);
            }
        }

        $user->update($request->only('name','email'));
        if(!empty($request->password)){
            $user->update(['password' => Hash::make($request->password)]);
        }
        $user->syncRoles($roles);
        $user->syncPermissions($permissions);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-updated-row')],200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-row')], 200);
    }


    public function destroyMany(Request $request){
        User::destroy($request->ids);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-rows')],200);
    }
}
