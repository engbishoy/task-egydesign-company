<?php

namespace Modules\Employee\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Employee\Entities\Employee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use Modules\Employee\Notifications\RegisterEmailToAdmin;
use Modules\Employee\Notifications\VerifyEmail;
use Modules\Employee\Notifications\WelcomeEmail;
use Modules\User\Entities\User;

class VerificationController extends Controller
{




    public function show(){
        return view('employee::auth.verify');
    }

    public function verify(Request $request){

        $validate=Validator::make($request->all(),[
            'code_verify'=>'required|max:4',
        ]);
    
          
        if($validate->fails()){
            
            return redirect()->back()->withErrors($validate->errors());
        }

            
        $employee=Employee::where([
            ['id',auth()->user()->id],
            ['code_verify',$request->code_verify]
        ])->first();

        if($employee){
            $employee->email_verified_at=date('d-m-Y H:i');
            $employee->save();

            // send mail welcome message 
            Notification::send($employee,new WelcomeEmail($employee));

            // send mail message to admin 
            $admin=User::all();
            foreach($admin as $admins){
                Notification::send($admins,new RegisterEmailToAdmin());
            }

            return redirect('/profile');
        }else{
            return redirect()->back()->withErrors(['errors'=>['Sorry,This code is incorrect']]);

        }
    }
    public function resend(){
        $employee=Employee::find(auth()->user()->id);
        $code=rand(1234,4321);
        $employee->update(['code_verify'=>$code]);
        Notification::send($employee,new VerifyEmail($employee));
        
        return redirect()->back()->with('success','The verification code has been sent again, thank you');

    }
    
}
