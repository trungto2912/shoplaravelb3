<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('layout');
});*/
Route::get('/', 'HomeController@index');
Route::get('trang-chu', 'HomeController@index');
Route::get('san-pham', 'HomeController@product');
Route::get('tin-tuc', 'HomeController@news');
Route::get('lien-he', 'HomeController@contact');
Route::get('login', 'AdminController@index');
Route::get('dashboard','AdminController@show_dashboard');
Route::post('admin-dashboard','AdminController@dashboard');
Route::get('logout','AdminController@logout');