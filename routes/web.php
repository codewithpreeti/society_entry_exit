<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

//Route::get('/', function () {
//    return view('login');
//});

Route::get('/', [LoginController::class, 'index']);
route::match(['get','post'],'/visitor-form',[LoginController::class,'visitors_form']);
route::post('/login-submit',[LoginController::class,'login']);
