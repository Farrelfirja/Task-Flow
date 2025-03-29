<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});


Route::get('/registrasi',[AuthController::class,'registerform'])->name('register.user');
Route::post('/register/add',[AuthController::class,'store'])->name('users.add');
Route::get('/',[AuthController::class,'loginform'])->name('login.users');
Route::get('/index',[AuthController::class,'index'])->name('index.users');
Route::post('/login',[AuthController::class,'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


