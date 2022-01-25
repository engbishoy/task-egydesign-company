<?php

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Auth;
use Modules\Employee\Http\Controllers\Auth\LoginController;
use Modules\Employee\Http\Controllers\Auth\RegisterController;
use Modules\Employee\Http\Controllers\Auth\VerificationController;

Route::group(['prefix' => 'employee','as' => 'employee.'], function () {
    Route::get('register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('register', [RegisterController::class, 'register'])->name('register');
    Route::middleware(['guest:web'])->group(function () {
        Route::get('login', [LoginController::class, 'show'])->name('login.show');
        Route::post('login', [LoginController::class, 'login'])->name('login');
    });

    Route::middleware(['auth:web'])->group(function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');


        // verify email
        Route::get('/email/verify', [VerificationController::class,'show'])->name('verify.email');
        Route::post('/email/verify', [VerificationController::class,'verify'])->name('verification.verify');
        Route::post('/email/resend', [VerificationController::class,'resend'])->name('verification.resend');
    
    });
});



