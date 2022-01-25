<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Modules\Company\Entities\Company;
use Modules\Employee\Entities\Employee;
use Illuminate\Contracts\Support\Renderable;
use Modules\Core\Http\Controllers\AppController;
use Modules\Employee\Http\Requests\EmployeeRequest;
use Modules\Employee\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends AppController
{
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

            'swal-update-prompt' => Lang::get('core::global.swal.swal-update-prompt'),
            'swal-update-prompt-single' => Lang::get('core::global.swal.swal-update-prompt-single'),
            'swal-hard-update-prompt' => Lang::get('core::global.swal.swal-hard-update-prompt'),
            'swal-hard-update-prompt-single' => Lang::get('core::global.swal.swal-hard-update-prompt-single'),
            'swal-update-btn-confirm' => Lang::get('core::global.swal.swal-update-btn-confirm'),
            'swal-update-btn-discard' => Lang::get('core::global.swal.swal-update-btn-discard'),

            'swal-restore-prompt' => Lang::get('core::global.swal.swal-restore-prompt'),
            'swal-restore-prompt-single' => Lang::get('core::global.swal.swal-restore-prompt-single'),
            'swal-restore-btn-confirm' => Lang::get('core::global.swal.swal-restore-btn-confirm'),
            'swal-restore-btn-discard' => Lang::get('core::global.swal.swal-restore-btn-discard'),
        ]);
        return view('employee::dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'POST',
            'dt_modal_submit_url' => route('employee.store')
        ]);

        $companies=Company::all();
        return view('employee::dashboard.modals.add')->with('companies',$companies);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(EmployeeRequest $request)
    {
        
        
        Employee::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
            'company_id'=>$request->company,
        ]);
    
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-added-row')],200);

    }

    
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Employee $employee)
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'PUT',
            'dt_modal_submit_url' => route('employee.update', [$employee->id]),
        ]);

        $companies=Company::all();
        return view('employee::dashboard.modals.edit', compact('employee','companies'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
         
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->phone=$request->phone;

        if(!empty($request->password)){
            $employee->password=Hash::make($request->password);
        }

        $employee->company_id=$request->company;


        $employee->save();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-updated-row')],200);
    }



    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-row')], 200);
    }


    public function destroyMany(Request $request){
        Employee::destroy($request->ids);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-rows')],200);
    }



    
}
