<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Modules\User\Entities\User;
use Yajra\DataTables\Facades\DataTables;

class UserDatatableController extends Controller
{
    public function __invoke(Request $request){
        
        if(!$request->ajax()){
            abort(403);
        }
        
        $users_without_roles = User::whereDoesntHave('roles')->get(); // first we get the users who don't have any roles assigned
        $users_with_roles_not_support = User::whereHas('roles', function ($query){ // second we get users who have roles except support
            $query->where('name','!=','support');
        })->get();
        $model = $users_without_roles->merge($users_with_roles_not_support); // we combine both to get the desired result
        return DataTables::of($model)
                ->addColumn('action', function($row){
                    $buttons = [
                        _dt_btn_factory([
                            'action'      => 'edit',
                            'actionType'  => 'modal',
                            'actionMethod'  => 'GET',
                            'url'         => route('users.edit', [$row->id]),
                            'title'       => Lang::get("core::global.datatable.actions.edit"),
                            'icon'        => 'fas fa-edit',
                            'classes'     => 'btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1',
                            'permissions' => auth()->user()->can('user.actions.edit'),
                            'conditions'    => true,
                            'tooltip' => [
                                'disabled' => false,
                                'placement' => 'top',
                                'color' => 'dark'
                            ]
                        ]),
                        _dt_btn_factory([
                            'action'      => 'delete',
                            'actionType'  => 'alert',
                            'actionMethod'  => 'DELETE',
                            'url'         => route('users.destroy', [$row->id]),
                            'title'       => Lang::get("core::global.datatable.actions.delete"),
                            'icon'        => 'fas fa-trash',
                            'classes'     => 'btn btn-icon btn-light-danger btn-sm',
                            'permissions' => auth()->user()->can('user.actions.delete'),
                            'conditions'    => true,
                            'tooltip' => [
                                'disabled' => false,
                                'placement' => 'top',
                                'color' => 'dark'
                            ],
                            'alertOptions' => [
                                'title' => 'swal-delete-prompt-single',
                                'icon' => 'error',
                                'showCancelButton' => 'true',
                                'buttonsStyling' => 'false',
                                'confirmButtonText' => 'swal-delete-btn-confirm',
                                'confirmButtonClasses' => 'btn-danger',
                                'cancelButtonText' => 'swal-delete-btn-discard',
                                'cancelButtonClasses' => 'btn-active-light-primary',
                            ]
                        ])
                    ];
                    return $buttons;
                })->make(true);
    }
}
