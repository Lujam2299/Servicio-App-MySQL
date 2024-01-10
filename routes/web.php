<?php

use App\Http\Controllers\admin\AdminRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;

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
Route::get("/login/docente", [AuthController::class, "docenteIndex"])->name("auth.docente");
Route::get("/login/admin", [AuthController::class, "adminIndex"])->name("auth.admin");

Route::post("/login/admin", [AuthController::class, "admin"])->name("auth.admin.store");

Route::get("/admin", [AdminController::class, "index"])->name("admin.index");

Route::get("/register", [RegisterController::class, "index"])->name("register.index");
Route::post("/register", [AdminRegisterController::class, "store"])->name("register.store");

Route::get('/dashboard', [UserDashboardController::class, "showDashboard"]);
