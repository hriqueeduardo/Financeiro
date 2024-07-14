<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect('/login');
});

// View de Login
Route::view('/login', 'login.index')->name('login.index');



Route::controller(LoginController::class)->group( function () {

    Route::post('/auth', 'auth')->name('login.auth');

});

Route::controller(RegisterController::class)->group(function (){
    Route::get('/cadastre-se', 'index')->name('register.index');
    Route::post('/cadastre-se/salvar', 'store')->name('register.store');
});
