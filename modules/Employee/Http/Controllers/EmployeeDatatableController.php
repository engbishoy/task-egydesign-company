<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Modules\Employee\Entities\Employee;
use Yajra\DataTables\Facades\DataTables;

class EmployeeDatatableController extends Controller
{
    public function __invoke(Request $request)
    {
        if (!$request->ajax()) {
            abort(403);
        }
        $model = Employee::all();
        return DataTables::of($model)
    
                ->addColumn('nb_orders', function($row){
                    return rand(0,10);
                })
         
                ->editColumn('company', function($row){
                    return $row->company->name;
                })
            


                ->addColumn('action', function($row){
                        $buttons=[

                
                            _dt_btn_factory([
                                'action'      => 'edit',
                                'actionType'  => 'modal',
                                'actionMethod'  => 'GET',
                                'url'         => route('employee.edit', [$row->id]),
                                'title'       => Lang::get("core::global.datatable.actions.edit"),
                                'icon'        => 'fas fa-edit',
                                'classes'     => 'btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1',
                                'permissions' => auth()->user()->can('employee.actions.edit'),
                                'conditions'    =>  true,
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
                                'url'         => route('employee.delete', [$row->id]),
                                'title'       => Lang::get("core::global.datatable.actions.delete"),
                                'icon'        => 'fas fa-trash',
                                'classes'     => 'btn btn-icon btn-light-danger btn-sm',
                                'permissions' => auth()->user()->can('employee.actions.delete') ,
                                'conditions'    => true,
                                'tooltip' => [
                                    'disabled' => false,
                                    'placement' => 'top',
                                    'color' => 'dark'
                                ],
                                'alertOptions' => [
                                    'title' => 'swal-delete-prompt-single',
                                    'icon' => 'warning',
                                    'showCancelButton' => 'true',
                                    'buttonsStyling' => 'false',
                                    'confirmButtonText' => 'swal-delete-btn-confirm',
                                    'confirmButtonClasses' => 'btn-danger',
                                    'cancelButtonText' => 'swal-delete-btn-discard',
                                    'cancelButtonClasses' => 'btn-active-light-primary',
                                ]
                            ]),
                                
                         
                        
                        ];

                        return $buttons;

                })
                ->make(true);

    }
}
