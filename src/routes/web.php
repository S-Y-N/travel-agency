<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thesecd
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\Home'], function() {
    Route::get('/',\App\Http\Controllers\Home\IndexController::class)->name('home.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin','prefix' => 'admin'],function(){
    Route::group(['namespace' => 'Home'],function () {
       Route::get('/','IndexController')->name('admin.home.index');
    });

    //Company
    Route::group(['namespace' => 'Company', 'prefix' => 'companies'], function () {
        Route::get('/', 'IndexController')->name('admin.company.index');
        Route::get('/create', 'CreateController')->name('admin.company.create');
        Route::post('/', 'StoreController')->name('admin.company.store');
        Route::get('/{company}', 'ShowController')->name('admin.company.show');
        Route::get('/{company}/edit', 'EditController')->name('admin.company.edit');
        Route::patch('/{company}', 'UpdateController')->name('admin.company.update');
        Route::delete('/{company}', 'DeleteController')->name('admin.company.delete');
    });

    //Legal Body
    Route::group(['namespace' => 'LegalBody', 'prefix' => 'legalbodies'], function () {
        Route::get('/', 'IndexController')->name('admin.legalbody.index');
        Route::get('/create', 'CreateController')->name('admin.legalbody.create');
        Route::post('/', 'StoreController')->name('admin.legalbody.store');
        Route::get('/{legalbody}', 'ShowController')->name('admin.legalbody.show');
        Route::get('/{legalbody}/edit', 'EditController')->name('admin.legalbody.edit');
        Route::patch('/{legalbody}', 'UpdateController')->name('admin.legalbody.update');
        Route::delete('/{legalbody}', 'DeleteController')->name('admin.legalbody.delete');
    });

    //Tour
    Route::group(['namespace' => 'Tour', 'prefix' => 'tours'], function () {
        Route::get('/', 'IndexController')->name('admin.tour.index');
        Route::get('/create', 'CreateController')->name('admin.tour.create');
        Route::post('/', 'StoreController')->name('admin.tour.store');
        Route::get('/{tour}', 'ShowController')->name('admin.tour.show');
        Route::get('/{tour}/edit', 'EditController')->name('admin.tour.edit');
        Route::patch('/{tour}', 'UpdateController')->name('admin.tour.update');
        Route::delete('/{tour}', 'DeleteController')->name('admin.tour.delete');
    });

    // Employee
    Route::group(['namespace' => 'Employee','prefix' => 'employees'], function () {
        Route::get('/', 'IndexController')->name('admin.employee.index');
        Route::get('/create', 'CreateController')->name('admin.employee.create');
        Route::post('/', 'StoreController')->name('admin.employee.store');
        Route::get('/{employee}', 'ShowController')->name('admin.employee.show');
        Route::get('/{employee}/edit', 'EditController')->name('admin.employee.edit');
        Route::patch('/{employee}', 'UpdateController')->name('admin.employee.update');
        Route::delete('/{employee}', 'DeleteController')->name('admin.employee.delete');
    });

    // Sale
    Route::group(['namespace' => 'Sale','prefix' => 'sales'], function () {
        Route::get('/', 'IndexController')->name('admin.sale.index');
        Route::get('/create', 'CreateController')->name('admin.sale.create');
        Route::post('/', 'StoreController')->name('admin.sale.store');
        Route::post('/search', 'SearchController')->name('admin.sale.search');
        Route::get('/{sale}', 'ShowController')->name('admin.sale.show');
        Route::get('/{sale}/edit', 'EditController')->name('admin.sale.edit');
        Route::patch('/{sale}', 'UpdateController')->name('admin.sale.update');
        Route::delete('/{sale}', 'DeleteController')->name('admin.sale.delete');
    });

    // Tourist
    Route::group(['namespace' => 'Tourist','prefix' => 'tourists'], function () {
        Route::get('/', 'IndexController')->name('admin.tourist.index');
        Route::get('/create', 'CreateController')->name('admin.tourist.create');
        Route::post('/', 'StoreController')->name('admin.tourist.store');
        Route::post('/search', 'SearchController')->name('admin.tourist.search');
        Route::get('/{tourist}', 'ShowController')->name('admin.tourist.show');
        Route::get('/{tourist}/edit', 'EditController')->name('admin.tourist.edit');
        Route::patch('/{tourist}', 'UpdateController')->name('admin.tourist.update');
        Route::delete('/{tourist}', 'DeleteController')->name('admin.tourist.delete');
    });
});
