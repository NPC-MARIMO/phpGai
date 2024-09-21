<?php

use Illuminate\Support\Facades\Route;
use app\Http\controllers\HomeController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about',[HomeController::class,"about"]);
// Route::get('/Login',[HomeController::class,"login"]);
Route::get('/login', function () {
    return view('login');
});