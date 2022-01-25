<?php

namespace Modules\Employee\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Company\Entities\Company;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Modules\Employee\Entities\Employee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use Modules\Employee\Notifications\VerifyEmail;

class RegisterController extends Controller
{
    public function show(){
        return view('employee::auth.register');
    }

    public function register(Request $request){
        
        $validate=Validator::make($request->all(),[
        'name'=>'required|max:20',
        'email'=>'required|max:255|email|unique:employees',
        'password'=>'required|max:255|min:8|string',
        'phone'=>'required|numeric|unique:employees',
        ]);

      
        if($validate->fails()){
            
            return redirect()->back()->withErrors($validate->errors())->withInput($request->all());
        }


        $companies=Company::select('email')->get();
        foreach($companies as $company){
            $domain[] = substr($company->email, strpos($company->email, "@") + 1);
            
        }

        $domain_email_register= substr($request->email, strpos($request->email, "@") + 1);

        if(!in_array($domain_email_register,$domain)){
            return redirect()->back()->withErrors(['errors'=>'Sorry,The domain email company not registered'])->withInput($request->all());
        }

    
        $code_verify=rand(1234,4321);
        $employee=Employee::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
            'company_id'=>1,
            'code_verify'=>$code_verify
        ]);
    

        Notification::send($employee,new VerifyEmail($employee));

        Auth::guard('web')->login($employee);

        return redirect()->route('employee.verify.email');
    
    }

}
