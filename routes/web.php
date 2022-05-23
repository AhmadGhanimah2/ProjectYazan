<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateCardController;
/// formate widnows
//////////if make login go to dashboard directory////////
Auth::routes();
Route::group(['middleware' => ['guest']], function () {
    Route::get('/',[HomeController::class,'index'])->name('login');
});

Route::group(['middleware' => 'auth','prefix' => 'dashboard'], function (){
    Route::get('/', function () {
        return view('dashboard.index');
    });
    Route::group(['prefix' => 'admin'], function (){
        Route::get('create-card',[CreateCardController::class,'show'])->name('admin.create-card');
        Route::post('create-card-save',[CreateCardController::class,'store'])->name('admin.create-card.save');
        Route::get('show-card',[CreateCardController::class,'index'])->name('admin.create-card.show');
    });

});
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);

