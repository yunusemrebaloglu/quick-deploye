<?php

use Illuminate\Support\Facades\Route;
use YunusEmreBaloglu\QuickDeploye\Http\Controllers\QuickDeployeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Define a route for deploying with a token
Route::get(config('quick-deploye.url') . '/{token}', [QuickDeployeController::class, 'deploye'])->name('quick-deploye.deploye');
