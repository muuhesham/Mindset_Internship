<?php
use App\Http\Controllers;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('addusers', [UserController::class,'add']);

Route::get('showusers', [UserController::class,'show']);

