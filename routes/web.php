<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect('/login');
});

// View de Login
Route::view('/login', 'login.index')->name('login.index');



Route::controller(LoginController::class)->group( function () {

    Route::post('/auth', 'auth')->name('login.auth');

});
