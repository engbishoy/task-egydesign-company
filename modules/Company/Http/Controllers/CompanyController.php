<?php

namespace Modules\Company\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Core\Entities\Option;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Modules\Company\Entities\Company;
use Illuminate\Contracts\Support\Renderable;
use Modules\Core\Http\Controllers\AppController;
use Modules\Company\Http\Requests\CompanyRequest;
use Modules\Company\Http\Requests\UpdateCompanyRequest;

class CompanyController extends AppController
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
        return view('company::dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'POST',
            'dt_modal_submit_url' => route('company.store')
        ]);
        return view('company::dashboard.modals.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CompanyRequest $request)
    {


        

        $company=Company::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);

    
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-added-row')],201);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Company $company)
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'PUT',
            'dt_modal_submit_url' => route('company.update', [$company->id]),
        ]);
        return view('company::dashboard.modals.edit')->with([
            'company' => $company,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {


        $company->name=$request->name;
        $company->email=$request->email;
        $company->phone=$request->phone;
        $company->address=$request->address;

        $company->save();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-updated-row')],200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-row')], 200);
    }


    public function destroyMany(Request $request){
        Company::destroy($request->ids);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-rows')],200);
    }
}
