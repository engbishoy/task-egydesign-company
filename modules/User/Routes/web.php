<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth routes


require __DIR__.'/auth.php';

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:dashboard'], function(){

    //dashboard page
    Route::view('/', 'user::dashboard.dashboard')->name('dashboard');

    // other routes
    Route::group(['prefix' => 'users', 'as' => 'users.'], function(){

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\User\Http\Controllers\UserController::class, 'destroyMany'])
        ->name('destroy.many')
        ->middleware('can:user.actions.delete');

        Route::get('ajax/datatable', UserDatatableController::class)
            ->name('datatable')
            ->middleware('can:user.actions.view');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/',[Modules\User\Http\Controllers\UserController::class, 'index'])
            ->name('index')
            ->middleware('can:user.actions.view');
        
        Route::post('/',[Modules\User\Http\Controllers\UserController::class, 'store'])
            ->name('store')
            ->middleware('can:user.actions.add');

        Route::get('create',[Modules\User\Http\Controllers\UserController::class, 'create'])
            ->name('create')
            ->middleware('can:user.actions.add');

        Route::put('{user}',[Modules\User\Http\Controllers\UserController::class, 'update'])
            ->name('update')
            ->middleware('can:user.actions.edit');

        Route::get('{user}/edit',[Modules\User\Http\Controllers\UserController::class, 'edit'])
            ->name('edit')
            ->middleware('can:user.actions.edit');

        Route::delete('{user}',[Modules\User\Http\Controllers\UserController::class, 'destroy'])
            ->name('destroy')
            ->middleware('can:user.actions.delete');


        // trashed routes
        Route::group(['prefix' => 'trashed', 'as' => 'trashed.', 'namespace' => 'Trashed'], function(){
            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('/delete-many', [Modules\User\Http\Controllers\Trashed\UserTrashedController::class, 'destroyMany'])
                ->name('destroy.many')
                ->middleware('can:user.actions.hard_delete');

            Route::post('/restore-many', [Modules\User\Http\Controllers\Trashed\UserTrashedController::class, 'restoreMany'])
                ->name('restore.many')
                ->middleware('can:user.actions.restore');

            // trashed resource operation
            Route::delete('/{user}', [Modules\User\Http\Controllers\Trashed\UserTrashedController::class, 'destroy'])
                ->name('destroy')
                ->middleware('can:user.actions.hard_delete');

            Route::post('/{user}', [Modules\User\Http\Controllers\Trashed\UserTrashedController::class, 'restore'])
                ->name('restore')
                ->middleware('can:user.actions.restore');

            Route::get('/ajax/datatable', UserTrashedDataTableController::class)
                ->name('datatable')
                ->middleware('can:user.actions.view_trash');
        });
    });
});