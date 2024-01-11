<?php

use App\Http\Controllers\admin\AdminRegisterController;
use App\Http\Controllers\admin\CreateUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\ReservationsController;

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

//Route::get('/dashboard', [UserDashboardController::class, "showDashboard"]);
Route::get('/dashboard', [UserDashboardController::class, "showDashboard"])->name('user.main');

Route::get('/dashboard', [UserDashboardController::class, "showDashboard"]);


Route::get('/dashboard/reservations/1', [ReservationsController::class, 'rafapinaSchedule'])->name('reservations.schedule');
Route::get('/dashboard/reservations/2', [ReservationsController::class, 'auditorioSchedule'])->name('reservations.auditorio');
Route::get('/dashboard/reservations/3', [ReservationsController::class, 'exdirectoresSchedule'])->name('reservations.exdirectores');

Route::get('/admin/create-user', [CreateUserController::class, 'index'])->name('admin.create-user');
Route::post('/admin/create-user', [RegisterController::class, 'store'])->name('admin.create-user.store');
