<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get("/", [DashboardController::class, "dashboard"]);

Route::get("about", [DashboardController::class, "about"]);

Route::get("contact", [DashboardController::class, "contact"]);

Route::get("feed", [DashboardController::class, "feed"]);

Route::get('/shop', [DashboardController::class, 'shop'])->name('shop');

Route::get("terms", [DashboardController::class, "terms"]);

Route::get("profile", [DashboardController::class, "profile"]);

//Authentication
Route::get("register", [AuthController::class, "register"]);
// Submit users
Route::post("/register", [AuthController::class,"signup"])->name("users.create");
//rename routes from sign in to log in
Route::get("/login", [AuthController::class, "login"])->name("login"); 
//Submit login Form
Route::post("/signin", [AuthController::class, "signin"])->name("signin");

Route::get('/logout', [AuthController::class, "logout"])->name('logout');












