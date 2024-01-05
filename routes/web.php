<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\home\HomeController;
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

Route::get("/", [HomeController::class, "index"])->name("home.index");

Route::get("/login/students", [AuthController::class, "index"])->name("auth.students");
Route::get("/login/admin", [AuthController::class, "admin"])->name("auth.admin");
