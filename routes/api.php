<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ExperienceController;



Route::post('login', [LoginController::class, 'login']);

Route::middleware(['auth:sanctum'])->get('validation', [LoginController::class, 'validation']);

Route::apiResource('profil', UserController::class)->middleware(['auth:sanctum']);

Route::apiResource('experience', ExperienceController::class)->middleware(['auth:sanctum']);