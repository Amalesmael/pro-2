<?php

use App\Http\Controllers\CstegoryController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[SiteController::class,"hi"]);
Route::get("login",[SiteController::class,"login"]);
Route::get("aboutus",[SiteController::class,"aboutus"]);



