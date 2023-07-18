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
