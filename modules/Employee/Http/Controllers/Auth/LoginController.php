<?php

namespace Modules\Employee\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Validation\ValidationException;
use Modules\Employee\Http\Requests\Auth\EmployeeLoginRequest;

class LoginController extends Controller
{
  
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('employee::auth.login');
    }

    public function login(EmployeeLoginRequest $request){
        
        if( $auth=Auth::guard('web')->attempt(['email'=> $request->email, 'password' => $request->password] )){
            $request->session()->regenerate();
            return redirect()->intended('/profile');
        }else{
            throw ValidationException::withMessages([
                'auth_failed' => __('auth.failed'),
            ]);
        
        }


    }

    /**
     * logout an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->regenerateToken();

        return redirect('/employee/login');
    }
}
