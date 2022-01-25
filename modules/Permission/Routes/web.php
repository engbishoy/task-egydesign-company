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


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:dashboard'], function () {
    // other routes
    Route::group(['prefix' => 'roles', 'as' => 'roles.'], function () {

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\Permission\Http\Controllers\RoleController::class, 'destroyMany'])
            ->name('destroy.many')
            ->middleware('can:role.actions.delete');

        Route::get('ajax/datatable', RoleDataTableController::class)
            ->name('datatable')
            ->middleware('can:role.actions.view');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/', [Modules\Permission\Http\Controllers\RoleController::class, 'index'])
            ->name('index')
            ->middleware('can:role.actions.view');

        Route::post('/', [Modules\Permission\Http\Controllers\RoleController::class, 'store'])
            ->name('store')
            ->middleware('can:role.actions.add');

        Route::get('create', [Modules\Permission\Http\Controllers\RoleController::class, 'create'])
            ->name('create')
            ->middleware('can:role.actions.add');

        Route::put('{role}', [Modules\Permission\Http\Controllers\RoleController::class, 'update'])
            ->name('update')
            ->middleware('can:role.actions.edit');

        Route::get('{role}/edit', [Modules\Permission\Http\Controllers\RoleController::class, 'edit'])
            ->name('edit')
            ->middleware('can:role.actions.edit');

        Route::delete('{role}', [Modules\Permission\Http\Controllers\RoleController::class, 'destroy'])
            ->name('destroy')
            ->middleware('can:role.actions.delete');
    });
});
