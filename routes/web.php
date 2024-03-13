<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubscriptionController;

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

Route::get('/', [App\Http\Controllers\GuestController::class, 'home']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/client/dashboard', [App\Http\Controllers\ClientController::class, 'dashboard']);


Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->middleware('auth','admin');


/**Route categories */
Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->middleware('auth','admin');

//Route::get('/categorie/liste',[CategoryController::class,'liste'])->middleware('auth','admin');

Route::post('/categorie/add',[CategoryController::class,'store'])->middleware('auth','admin');

Route::get('/categorie/delete/{id}',[CategoryController::class,'destroy'])->middleware('auth','admin');

Route::post('/categorie/update/{id}',[CategoryController::class,'update'])->middleware('auth','admin');


/**Route produccts */
Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->middleware('auth','admin');

//Route::get('/product/liste',[ProductController::class,'liste'])->middleware('auth','admin');

Route::post('/product/add',[ProductController::class,'store'])->middleware('auth','admin');

Route::get('/product/delete/{id}',[ProductController::class,'destroy'])->middleware('auth','admin');

Route::post('/product/update/{id}',[ProductController::class,'update'])->middleware('auth','admin');




/**Route subscriptions */
Route::get('/admin/subscriptions', [App\Http\Controllers\SubscriptionController::class, 'index']);

Route::post('/subscription/add',[SubscriptionController::class,'store']);

Route::get('/subscription/delete/{id}',[SubscriptionController::class,'destroy']);

Route::post('/subscription/update/{id}',[SubscriptionController::class,'update']);

