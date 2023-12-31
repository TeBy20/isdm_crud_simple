<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);


Route::get("/products", [ProductController::class, "index"])->name("products.index")->middleware('auth');
Route::post("/products",[ProductController::class, "store"])->name("products.store")->middleware('auth');
Route::get("/products/create", [ProductController::class, "create"])->name("products.create")->middleware('auth');
Route::get("/products/{product}", [ProductController::class, "show"])->name("products.show")->middleware('auth');
Route::put("/products/{product}", [ProductController::class, "update"])->name("products.update")->middleware('auth');
Route::delete("/products/{product}", [ProductController::class, "destroy"])->name("products.destroy")->middleware('auth');
Route::get("/products/{product}/edit", [ProductController::class, "edit"])->name("products.edit")->middleware('auth');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

