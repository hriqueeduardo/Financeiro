<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect('/login');
});

// View de Login
Route::view('/login', 'login.index')->name('login');



Route::controller(LoginController::class)->group( function () {

    Route::post('/login', 'auth')->name('login.auth');

});

Route::get('/logout', [LogoutController::class, 'destroy'])
    ->middleware('auth')->name('logout.destroy');

Route::controller(RegisterController::class)->group(function (){

    Route::get('/cadastre-se', 'index')->name('register.index');
    Route::post('/cadastre-se/salvar', 'store')->name('register.store');
});


Route::controller(DashboardController::class)->group( function () {

    Route::get('/dashboard', 'index')->middleware('auth')->name('dashboard.index');

});