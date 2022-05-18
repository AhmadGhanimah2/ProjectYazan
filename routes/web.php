<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateCardController;

//////////if make login go to dashboard directory////////
Auth::routes();
Route::group(['middleware' => ['guest']], function () {
    Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('login');
});

Route::group(['prefix' => 'dashboard','middleware' => 'auth'], function (){
    Route::get('/', function () {
        return view('dashboard.index');
    });
});
Route::group(['prefix' => 'admin'], function (){
    Route::get('create-card',[CreateCardController::class,'index'])->name('admin.create-card');
});
