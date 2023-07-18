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
//Route::get('/',function (){
//    return 'bddg';
//});
Route::group(['namespace' => 'App\Http\Controllers\Home'], function() {
    Route::get('/',\App\Http\Controllers\Home\IndexController::class)->name('home.index');
});
Route::group(['namespace' => 'App\Http\Controllers\Admin','prefix' => 'admin'],function(){
    Route::group(['namespace' => 'Home'],function (){
       Route::get('/','IndexController')->name('admin.home.index');
    });
    //Company
    Route::group(['namespace' => 'Company', 'prefix' => 'companies'], function () {
        Route::get('/', 'IndexController')->name('admin.company.index');
        Route::get('/create', 'CreateController')->name('admin.company.create');
        Route::post('/', 'StoreController')->name('admin.company.store');
        Route::get('/{post}', 'ShowController')->name('admin.company.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.company.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.company.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.company.delete');

    });

    //Legal Body
    Route::group(['namespace' => 'LegalBody', 'prefix' => 'legalbodies'], function () {
        Route::get('/', 'IndexController')->name('admin.legalbody.index');
        Route::get('/create', 'CreateController')->name('admin.legalbody.create');
        Route::post('/', 'StoreController')->name('admin.legalbody.store');
        Route::get('/{post}', 'ShowController')->name('admin.legalbody.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.legalbody.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.legalbody.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.legalbody.delete');

    });
    //Tour
    Route::group(['namespace' => 'Tour', 'prefix' => 'tours'], function () {
        Route::get('/', 'IndexController')->name('admin.tour.index');
        Route::get('/create', 'CreateController')->name('admin.tour.create');
        Route::post('/', 'StoreController')->name('admin.tour.store');
        Route::get('/{post}', 'ShowController')->name('admin.tour.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.tour.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.tour.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.tour.delete');

    });

    // Employee
    Route::group(['namespace' => 'Employee','prefix' => 'employees'], function () {
        Route::get('/', 'IndexController')->name('admin.employee.index');
        Route::get('/employee/create', 'CreateController')->name('admin.employee.create');
        Route::post('/employee/store', 'StoreController')->name('admin.employee.create');
    });

// Sale
    Route::group(['namespace' => 'Sale','prefix' => 'sales'], function () {
        Route::get('/', 'IndexController')->name('admin.sale.index');
        Route::get('/sale/create', 'CreateController')->name('admin.sale.create');
        Route::post('/sale/store', 'StoreController')->name('admin.sale.create');
        Route::post('/sale/search', 'SearchController')->name('admin.sale.search');
    });

// Tourist
    Route::group(['namespace' => 'tourist','prefix' => 'tourists'], function () {
        Route::get('/', 'IndexController')->name('admin.tourist.index');
        Route::get('/tourist/create', 'CreateController')->name('admin.tourist.create');
        Route::post('/tourist/store', 'StoreController')->name('admin.tourist.create');
        Route::post('/tourist/search', 'SearchController')->name('admin.tourist.search');
    });
});
