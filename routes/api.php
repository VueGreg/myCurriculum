<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::post('login', [LoginController::class, 'login']);

Route::middleware(['auth:sanctum'])->get('validation', [LoginController::class, 'validation']);