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


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:dashboard'], function(){

    // rest of routes
    Route::group(['prefix' => 'companies', 'as' => 'company.'], function(){

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\Company\Http\Controllers\CompanyController::class, 'destroyMany'])
        ->name('destroy.many')
        ->middleware('can:company.actions.delete');

        Route::get('ajax/datatable', CompanyDatatableController::class)
            ->name('datatable')
            ->middleware('can:company.actions.view');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/',[Modules\Company\Http\Controllers\CompanyController::class, 'index'])
            ->name('index')
            ->middleware('can:company.actions.view');

        Route::post('/',[Modules\Company\Http\Controllers\CompanyController::class, 'store'])
            ->name('store')
            ->middleware('can:company.actions.add');

        Route::get('create',[Modules\Company\Http\Controllers\CompanyController::class, 'create'])
            ->name('create')
            ->middleware('can:company.actions.add');

        Route::put('{company}',[Modules\Company\Http\Controllers\CompanyController::class, 'update'])
            ->name('update')
            ->middleware('can:company.actions.edit');

        Route::get('{company}/edit',[Modules\Company\Http\Controllers\CompanyController::class, 'edit'])
            ->name('edit')
            ->middleware('can:company.actions.edit');

        Route::delete('{company}',[Modules\Company\Http\Controllers\CompanyController::class, 'destroy'])
            ->name('delete')
            ->middleware('can:company.actions.delete');





        // trashed routes
        Route::group(['prefix' => 'trashed', 'as' => 'trashed.', 'namespace' => 'Trashed'], function(){
            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('/delete-many', [Modules\Company\Http\Controllers\Trashed\CompanyTrashedController::class, 'destroyMany'])
                ->name('destroy.many')
                ->middleware('can:company.actions.hard_delete');

            Route::post('/restore-many', [Modules\Company\Http\Controllers\Trashed\CompanyTrashedController::class, 'restoreMany'])
                ->name('restore.many')
                ->middleware('can:company.actions.restore');

            // trashed resource operation
            Route::delete('/{company}', [Modules\Company\Http\Controllers\Trashed\CompanyTrashedController::class, 'destroy'])
                ->name('destroy')
                ->middleware('can:company.actions.hard_delete');

            Route::post('/{company}', [Modules\Company\Http\Controllers\Trashed\CompanyTrashedController::class, 'restore'])
                ->name('restore')
                ->middleware('can:company.actions.restore');



            Route::get('/ajax/datatable', CompanyTrashedDataTableController::class)
                ->name('datatable')
                ->middleware('can:company.actions.view_trash');
        });
    });


});






