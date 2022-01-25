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

require __DIR__.'/auth.php';


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){

    // rest of routes
    Route::group(['prefix' => 'employee', 'as' => 'employee.'], function(){

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\Employee\Http\Controllers\EmployeeController::class, 'destroyMany'])
        ->name('destroy.many')
        ->middleware('can:employee.actions.delete');



        Route::get('ajax/datatable', EmployeeDatatableController::class)
            ->name('datatable')
            ->middleware('can:employee.actions.view');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/',[Modules\Employee\Http\Controllers\EmployeeController::class, 'index'])
            ->name('index')
            ->middleware('can:employee.actions.view');

   
        Route::post('/',[Modules\Employee\Http\Controllers\EmployeeController::class, 'store'])
            ->name('store')
            ->middleware('can:employee.actions.add');

        Route::get('create',[Modules\Employee\Http\Controllers\EmployeeController::class, 'create'])
            ->name('create')
            ->middleware('can:employee.actions.add');

        Route::put('{employee}',[Modules\Employee\Http\Controllers\EmployeeController::class, 'update'])
            ->name('update')
            ->middleware('can:employee.actions.edit');

        Route::get('{employee}/edit',[Modules\Employee\Http\Controllers\EmployeeController::class, 'edit'])
            ->name('edit')
            ->middleware('can:employee.actions.edit');

        Route::delete('{employee}',[Modules\Employee\Http\Controllers\EmployeeController::class, 'destroy'])
            ->name('delete')
            ->middleware('can:employee.actions.delete');


        // send notification to spesfic employee
        Route::get('/notification/create/{id}', [Modules\Employee\Http\Controllers\NotificationController::class, 'create_user_notify'])->name('create_notify');
        Route::post('/notification/send/{id}',  [Modules\Employee\Http\Controllers\NotificationController::class, 'send_user_notify'])->name('send_notify');

        // send notification to all employee

        Route::get('/all/notification/create/{id}', [Modules\Employee\Http\Controllers\NotificationController::class, 'create_user_all_notify'])->name('all.create_notify');
        Route::post('/all/notification/send/{id}',  [Modules\Employee\Http\Controllers\NotificationController::class, 'send_user_all_notify'])->name('all.send_notify');

        //end   




        // trashed routes
        Route::group(['prefix' => 'trashed', 'as' => 'trashed.', 'namespace' => 'Trashed'], function(){
            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('/delete-many', [Modules\Employee\Http\Controllers\Trashed\EmployeeTrashedController::class, 'destroyMany'])
                ->name('destroy.many')
                ->middleware('can:employee.actions.hard_delete');

            Route::post('/restore-many', [Modules\Employee\Http\Controllers\Trashed\EmployeeTrashedController::class, 'restoreMany'])
                ->name('restore.many')
                ->middleware('can:employee.actions.restore');

            // trashed resource operation
            Route::delete('/{employee}', [Modules\Employee\Http\Controllers\Trashed\EmployeeTrashedController::class, 'destroy'])
                ->name('destroy')
                ->middleware('can:employee.actions.hard_delete');

            Route::post('/{employee}', [Modules\Employee\Http\Controllers\Trashed\EmployeeTrashedController::class, 'restore'])
                ->name('restore')
                ->middleware('can:employee.actions.restore');



            Route::get('/ajax/datatable', EmployeeTrashedDataTableController::class)
                ->name('datatable')
                ->middleware('can:employee.actions.view_trash');
        });
    });


});



route::get('/profile',function(){
    return view('employee::profile');
})->middleware(['auth:web','verifiedEmail']);