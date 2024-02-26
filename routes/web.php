<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->middleware('auth','admin');

Route::get('/client/dashboard', [App\Http\Controllers\ClientController::class, 'dashboard']);


Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->middleware('auth','admin');

Route::get('/categorie/liste',[CategoryController::class,'liste'])->middleware('auth','admin');

Route::post('/categorie/add',[CategoryController::class,'store'])->middleware('auth','admin');

Route::get('/categorie/delete/{id}',[CategoryController::class,'destroy'])->middleware('auth','admin');

Route::post('/categorie/update/{id}',[CategoryController::class,'update'])->middleware('auth','admin');

