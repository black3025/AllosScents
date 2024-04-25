<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get("/", [DashboardController::class, "dashboard"]);

Route::get("about", [DashboardController::class, "about"]);

Route::get("contact", [DashboardController::class, "contact"]);

Route::get("feed", [DashboardController::class, "feed"]);

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


//shop & Products
Route::get('/shop', [ProductsController::class, 'shop'])->name('shop');
//adding to cart
Route::get('addToCart/{id}',[ProductsController::class, 'addToCart'])->name('addToCart');
//Proceed to checkout
Route::get('checkout',[ProductsController::class, 'checkout'])->name('checkout');









