<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateCardController;

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
        Route::post('delete-card',[CreateCardController::class,'destroy'])->name('admin.delete-card.delete');
        Route::post('update-card',[CreateCardController::class,'update'])->name('admin.update-card.update');
        Route::get('profile',[CreateCardController::class,'edit'])->name('admin.profile.edit');

    });


});

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);

