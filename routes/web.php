<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\LocalizationController;
use App\Models\Restaurant;

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



/** Route Restaurants */
Route::get('/admin/restaurants', [App\Http\Controllers\RestaurantController::class, 'index']);
Route::post('/restaurant/add',[RestaurantController::class,'store']);

Route::get('/restaurant/create',[RestaurantController::class,'create']);
Route::get('/restaurant/delete/{id}',[RestaurantController::class,'destroy']);
Route::get('/restaurant/deactivate/{id}',[RestaurantController::class,'deactivate']);
Route::get('/restaurant/activate/{id}',[RestaurantController::class,'activate']);
Route::get('/restaurant/search',[RestaurantController::class,'search']);

Route::get('/restaurants/export', [RestaurantController::class,'export'])->name('export.restaurants');




/** Route Settings */
Route::get('/admin/settings', [App\Http\Controllers\SettingController::class, 'index']);

/**Route categories */
Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index']);

//Route::get('/categorie/liste',[CategoryController::class,'liste'])->middleware('auth','admin');

//Route::post('/categorie/add',[CategoryController::class,'store'])->middleware('auth','admin');

//Route::get('/categorie/delete/{id}',[CategoryController::class,'destroy'])->middleware('auth','admin');

//Route::post('/categorie/update/{id}',[CategoryController::class,'update'])->middleware('auth','admin');


/**Route produccts */
Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->middleware('auth','admin');

//Route::get('/product/liste',[ProductController::class,'liste'])->middleware('auth','admin');

Route::post('/product/add',[ProductController::class,'store'])->middleware('auth','admin');

Route::get('/product/delete/{id}',[ProductController::class,'destroy'])->middleware('auth','admin');

Route::post('/product/update/{id}',[ProductController::class,'update'])->middleware('auth','admin');




/**Route subscriptions */
Route::get('/admin/subscriptions', [App\Http\Controllers\SubscriptionController::class, 'index']);

Route::post('/subscription/add',[SubscriptionController::class,'store']);

Route::get('/subscription/create',[SubscriptionController::class,'create']);

Route::get('/subscription/delete/{id}',[SubscriptionController::class,'destroy']);

Route::post('/subscription/update/{id}',[SubscriptionController::class,'update']);
Route::get('/subscription/edit/{id}',[SubscriptionController::class,'updateinter']);


Route::get('/subscriptions/export', [SubscriptionController::class,'export'])->name('export.subscriptions');





/**Localization Route */
Route::get('languageConverter/{locale}',function($locale){
    if(in_array($locale,['ar','fr','en'])){
        session()->put('locale',$locale);
    }

    return redirect()->back();

})->name('languageConverter');







/**retaurant owner new orders Route */

Route::get('/restaurant/live', [App\Http\Controllers\LiveController::class, 'index']);
Route::get('/restaurant/orders', function(){return view('client.order.index');});
Route::get('/restaurant/management', function(){return view('client.restaurant.index');});



/**menu routes  */

//Route::get('/restaurant/menu', function(){return view('client.menu.index');});
Route::get('/restaurant/menu', [App\Http\Controllers\CategoryController::class, 'index']);
Route::post('/restaurant/menu/categorie/add',[CategoryController::class,'store']);
Route::get('/restaurant/menu/categorie/delete/{id}',[CategoryController::class,'destroy']);

Route::post('/restaurant/menu/categorie/update/{id}',[CategoryController::class,'update']);
//Route::get('/restaurant/menu', [App\Http\Controllers\ItemController::class, 'index']);
Route::post('/restaurant/menu/item/add',[ItemController::class,'store']);
Route::get('/restaurant/menu/item/delete/{id}',[ItemController::class,'destroy']);

Route::post('/restaurant/menu/item/update/{id}',[ItemController::class,'update']);

Route::get('/restaurant/menu/item/edit/{id}',[ItemController::class,'updateinter']);