<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SigninController;
use Illuminate\Support\Facades\Route;


Route::get("/", [DashboardController::class, "dashboard"]);

Route::get("about", [DashboardController::class, "about"]);

Route::get("contact", [DashboardController::class, "contact"]);

Route::get("feed", [DashboardController::class, "feed"]);

Route::get("profile", [DashboardController::class, "profile"]);

Route::get('/shop', [DashboardController::class, 'shop'])->name('shop');

Route::get("terms", [DashboardController::class, "terms"]);

Route::get("register", [DashboardController::class, "register"]);

// Submit users
Route::post("/register", [RegisterController::class,"signup"])->name("users.create");

//rename routes from sign in to log in
Route::get("/login", [DashboardController::class, "login"])->name("login"); 

Route::post("/signin", [SigninController::class, "signin"])->name("signin");

Route::get('/logout', [SigninController::class, "logout"])->name('logout');

Route::get("/resgister", [DashboardController::class,"signin"]);











