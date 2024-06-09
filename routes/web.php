<?php

use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ConsomateurController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\WaiterCallController;
use App\Models\Area;
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


Route::get('/client/dashboard', [App\Http\Controllers\ClientController::class, 'dashboard'])->middleware('auth','user','active');


Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->middleware('auth','admin');
Route::get('/staff/dashboard', [App\Http\Controllers\StaffController::class, 'dashboard']);

//prooooooooooooooooooooofile admin 

Route::post('/admin/profile/update/{id}',[HomeController::class,'update_admin'])->middleware('auth','admin');
Route::get('/admin/profile/{id}',[HomeController::class,'updateinteradmin'])->middleware('auth','admin');
Route::post('/admin/profile/updatePassword/{id}', [HomeController::class, 'updatePasswordadmin'])->middleware('auth','admin');


//prooooooooooooooooooooofile client
Route::post('/client/profile/update/{id}',[HomeController::class,'update_client'])->middleware('auth','user');
Route::get('/client/profile/{id}',[HomeController::class,'updateinterclient'])->middleware('auth','user');
Route::post('/client/profile/updatePassword/{id}', [HomeController::class, 'updatePasswordclient'])->middleware('auth','user');

/** Route Restaurants */
Route::get('/admin/restaurants', [App\Http\Controllers\RestaurantController::class, 'index'])->name('admin.restaurants.index');
Route::post('/restaurant/add',[RestaurantController::class,'store']);

Route::get('/restaurant/create',[RestaurantController::class,'create']);
Route::get('/restaurant/delete/{id}',[RestaurantController::class,'destroy']);
Route::get('/restaurant/deactivate/{id}',[RestaurantController::class,'deactivate']);
Route::get('/restaurant/activate/{id}',[RestaurantController::class,'activate']);
//l'interface  qui s'affiche si le user et disactivé
Route::get('/restaurant/deactivate',[RestaurantController::class,'afficherMsgBloquer'])->middleware('auth');

Route::get('/restaurant/search',[RestaurantController::class,'search']);

Route::get('/restaurants/export', [RestaurantController::class,'export'])->name('export.restaurants');

Route::post('/restaurant/update/{id}',[RestaurantController::class,'update'])->name('admin.restaurants.update');
Route::get('/restaurant/edit/{id}  ',[RestaurantController::class,'updateinter']);






/** Route Settings */
Route::get('/admin/settings', [App\Http\Controllers\SettingController::class, 'index']);
Route::post('/admin/settings/update', [App\Http\Controllers\SettingController::class, 'update'])->name('admin_banner_home_update');
/** Route featuress */
Route::get('/admin/features', [App\Http\Controllers\FeaturesController::class, 'index'])->name('admin.features.index');
Route::post('/feature/add',[FeaturesController::class,'store']);

Route::get('/feature/delete/{id}',[FeaturesController::class,'destroy']);

Route::post('/admin/features/update', [App\Http\Controllers\FeaturesController::class, 'update'])->name('admin_feature_update');
Route::post('/admin/features/item/update/{id}', [App\Http\Controllers\FeaturesController::class, 'item_update'])->name('admin_feature_item_update');

/**Route why qr menu app ? */
Route::get('/admin/why', [App\Http\Controllers\WhyController::class, 'index']);
Route::post('/why/add',[WhyController::class,'store']);
Route::get('/why/delete/{id}',[WhyController::class,'destroy']);
Route::post('/admin/why/update/{id}', [App\Http\Controllers\WhyController::class, 'update'])->name('admin_why_update');

/**demo route */
Route::get('/admin/demo', [App\Http\Controllers\DemoController::class, 'index']);
Route::post('/admin/demo/update', [App\Http\Controllers\DemoController::class, 'update'])->name('admin_demo_update');

/**frequent questions and their answers */
Route::get('/admin/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('admin.faq.index');
Route::post('/faq/add',[FaqController::class,'store']);
Route::get('/faq/delete/{id}',[FaqController::class,'destroy']);

Route::post('/admin/faq/update', [App\Http\Controllers\FaqController::class, 'update'])->name('admin_faq_update');
Route::post('/admin/faq/item/update/{id}', [App\Http\Controllers\FaqController::class, 'item_update'])->name('admin_faq_item_update');

/**contact routes */
Route::get('/admin/contacts', [App\Http\Controllers\ContactController::class, 'index']);
Route::post('/admin/contact/update', [App\Http\Controllers\ContactController::class, 'update'])->name('admin_banner_contact_update');



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

Route::get('/restaurant/orders',[App\Http\Controllers\commandeController::class,'index']);
Route::get('/restaurant/management', function(){return view('client.restaurant.index');})->name('client.restaurants.index');

Route::post('/restaurant/management/update/{id}',[RestaurantController::class,'updatemanagement']);


/**menu routes  */

//Route::get('/restaurant/menu', function(){return view('client.menu.index');});
Route::get('/restaurant/menu', [App\Http\Controllers\CategoryController::class, 'index'])->name('restaurant.menu');
Route::post('/restaurant/menu/categorie/add',[CategoryController::class,'store']);
Route::get('/restaurant/menu/categorie/delete/{id}',[CategoryController::class,'destroy']);

Route::post('/restaurant/menu/categorie/update/{id}',[CategoryController::class,'update']);
//Route::get('/restaurant/menu', [App\Http\Controllers\ItemController::class, 'index']);
Route::post('/restaurant/menu/item/add',[ItemController::class,'store']);
Route::delete('/restaurant/menu/item/delete/{id}',[ItemController::class,'destroy']);

Route::post('/restaurant/menu/item/update/{id}',[ItemController::class,'update']);

Route::get('/restaurant/menu/item/edit/{id}',[ItemController::class,'updateinter']);


/**tables des restaurant routes  */
Route::get('/restaurant/table',[TableController::class,'index'])->name('table.index');
Route::post('/restaurant/table/add',[TableController::class,'store']);
Route::get('/restaurant/table/create',[TableController::class,'create']);
Route::delete('/restaurant/table/delete/{id}',[App\Http\Controllers\TableController::class,'destroy']);
Route::post('/restaurant/table/update/{id}',[TableController::class,'update']);


/**areas des restaurant routes  */
Route::get('/restaurant/area',[App\Http\Controllers\AreaController::class,'index']);
Route::get('/restaurant/area/create',[App\Http\Controllers\AreaController::class,'create']);
Route::post('/restaurant/area/add',[App\Http\Controllers\AreaController::class,'store']);
Route::delete('/restaurant/area/delete/{id}',[App\Http\Controllers\AreaController::class,'destroy']);
Route::post('/restaurant/area/update/{id}',[AreaController::class,'update']);

/**staff */
Route::get('/restaurant/staff',[StaffController::class,'index']);
Route::get('/staff/create',[StaffController::class,'create']);

Route::post('/staff/add',[StaffController::class,'store']);
Route::get('/staff/delete/{id}',[StaffController::class,'destroy']);
Route::post('/staff/update/{id}',[StaffController::class,'update']);
Route::get('/staff/orders',[App\Http\Controllers\commandeController::class,'indexstaff']);
//Route::get('/staff/orders', function(){return view('staff.order.index');});
/**qr cooode */

Route::get('/qrcode', [App\Http\Controllers\QrcodeController::class, 'generateQRCode'])->name('qrcode.index');
Route::get('/qrcode/download', [App\Http\Controllers\QrcodeController::class, 'downloadQRCode'])->name('qrcode.download');




/**expenses */

Route::get('/client/expenses',[App\Http\Controllers\ExpensesController::class,'index']);
Route::post('/expense_category/add',[ExpensesController::class,'store']);
Route::get('/expense_category/delete/{id}',[ExpensesController::class,'destroy']);
Route::post('/expense_category/update/{id}',[ExpensesController::class,'update']);

Route::post('/expense/add',[ExpensesController::class,'store_expense']);
Route::get('/expense/delete/{id}',[ExpensesController::class,'destroy_expense']);
Route::post('/expense/update/{id}',[ExpensesController::class,'update_expense']);

/**interface client finale */



Route::get('/QRMenu/restaurant/{id}', [App\Http\Controllers\ConsomateurController::class, 'index'])->name('QRMenu.restaurant');

Route::post('/QRMenu/restaurant/order/add', [App\Http\Controllers\ConsomateurController::class, 'addcmd'])->name('QRMenu.restaurant.order.add');
Route::post('/add-order', [CommandeController::class, 'addOrder'])->name('add.order');
Route::get('/QRMenu/restaurant/lc/{idlc}/destroy', [App\Http\Controllers\ConsomateurController::class, 'ligneCommandeDestroy'])->name('QRMenu.restaurant.lc.delete');

Route::get('/QRMenu/restaurant/lc/{idlc}/plusQuantity', [App\Http\Controllers\ConsomateurController::class, 'ligneCommandePlusQuantity'])->name('QRMenu.restaurant.lc.plusQuantity');


Route::get('/QRMenu/restaurant/lc/{idlc}/moinsQuantity', [App\Http\Controllers\ConsomateurController::class, 'ligneCommandeMoinsQuantity'])->name('QRMenu.restaurant.lc.moinsQuantity');

Route::post('/cart/add', [App\Http\Controllers\ConsomateurController::class, 'addToCart'])->name('cart.add');

Route::get('/QRMenu/restaurant/placeOrder', [App\Http\Controllers\ConsomateurController::class, 'placeOrder']);

Route::get('/user/{userId}/categories', [App\Http\Controllers\QrcodeController::class, 'showCategories'])->name('user.categories');





Route::get('/QRMenu/order', [App\Http\Controllers\CommandeController::class, 'showcheckout'])->name('consomateur.checkout');
Route::post('/update-commande', [App\Http\Controllers\CommandeController::class, 'updateEtat'])->name('commande.updateEtat');





Route::get('/client/subscription', [App\Http\Controllers\RestaurantController::class, 'sub']);
//call waiter
use App\Http\Controllers\WaiterController;

Route::post('/send-notification', [WaiterController::class, 'callWaiter'])->name('call.waiter');

//Route::post('/call-waiter', 'CallWaiterController@callWaiter')->name('call.waiter');

//Route::post('/call-waiter', [WaiterCallController::class, 'callWaiter']);

