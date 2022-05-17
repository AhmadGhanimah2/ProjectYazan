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
//Form
Route::get('/', function () {
    return view('welcome');
});
Route::view('/index','dashboard.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('Form','dashboard.Form');
