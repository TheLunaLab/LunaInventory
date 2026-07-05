<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/computers', [ComputerController::class, 'index']);

Route::get('/computers/create', [ComputerController::class, 'create']);

Route::post('/computers', [ComputerController::class, 'store']);