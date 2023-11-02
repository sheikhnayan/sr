<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DealerController;
use App\Http\Controllers\admin\DeliveryController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\SOController;
use App\Http\Controllers\admin\SRController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CheckoutController;
use App\Http\Controllers\admin\PickupManController;
use App\Http\Controllers\admin\RetailerController;
use App\Http\Controllers\admin\AreaController;
use App\Http\Controllers\FrontendController;

use App\Http\Controllers\front\SRController as FSRController;

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
    return view('front.index');
});

Route::prefix('admin')->group(function () {

    Route::prefix('/dealer')->name('dealer.')->group(function () {
        Route::get('/', [DealerController::class,'index'])->name('index');
        Route::get('/add', [DealerController::class,'create'])->name('add');
        Route::post('/store', [DealerController::class,'store'])->name('store');
        Route::post('/update/{id}', [DealerController::class,'update'])->name('update');
        Route::get('/company', [DealerController::class,'company'])->name('company');
        Route::get('/list', [DealerController::class,'list'])->name('list');
        Route::get('/profile/{id}', [DealerController::class,'profile'])->name('profile');
        Route::get('/profit', [DealerController::class,'profit'])->name('profit');
        Route::get('/sr-profit', [DealerController::class,'sr_profit'])->name('sr-profit');
        Route::get('/success', [DealerController::class,'success'])->name('success');
    });

    Route::prefix('/delivery')->name('delivery.')->group(function () {
        Route::get('/add', [DeliveryController::class,'create'])->name('add');
        Route::get('/checkout', [DeliveryController::class,'checkout'])->name('checkout');
        Route::get('/list', [DeliveryController::class,'list'])->name('list');
        Route::get('/order', [DeliveryController::class,'order'])->name('order');
        Route::get('/add-route', [DeliveryController::class,'add_route'])->name('add-route');
        Route::get('/add-route-number', [DeliveryController::class,'add_route_number'])->name('add-route-number');
        Route::get('/route', [DeliveryController::class,'route'])->name('route');
    });

    Route::prefix('/order')->name('order.')->group(function () {
        Route::get('/order-page', [OrderController::class,'order_page'])->name('order-page');
        Route::get('/retailer-order-profile', [OrderController::class,'retailer_order_profile'])->name('retailer-order-profile');
    });

    Route::prefix('/area')->name('area.')->group(function () {
        Route::get('/index', [AreaController::class,'index'])->name('index');
        Route::post('/store', [AreaController::class,'store'])->name('store');
        Route::post('/update/{id}', [AreaController::class,'update'])->name('update');
    });

    Route::prefix('/srs')->name('sr.')->group(function () {
        Route::get('/', [SRController::class,'index'])->name('index');
        Route::post('/store', [SRController::class,'store'])->name('store');
        Route::get('/profile/{id}', [SRController::class,'profile'])->name('profile');
    });

    Route::prefix('/company')->name('company.')->group(function () {
        Route::get('/', [CompanyController::class,'index'])->name('index');
        Route::post('/store', [CompanyController::class,'store'])->name('store');
        Route::get('/edit/{id}', [CompanyController::class,'edit'])->name('edit');
        Route::post('/update/{id}', [CompanyController::class,'update'])->name('update');
    });

    Route::prefix('/product')->name('product.')->group(function () {
        Route::get('/', [ProductController::class,'index'])->name('index');
        Route::post('/store', [ProductController::class,'store'])->name('store');
        Route::post('/update/{id}', [ProductController::class,'update'])->name('update');
        Route::post('/category', [ProductController::class,'category'])->name('category');
        Route::get('/category/{id}', [ProductController::class,'category_delete'])->name('category.delete');
    });

    Route::prefix('/checkout')->name('checkout.')->group(function () {
        Route::get('/', [CheckoutController::class,'index'])->name('index');
        Route::get('/checkout-man-profile', [CheckoutController::class,'checkout_man_profile'])->name('checkout-man-profile');
    });

    Route::prefix('/retailer')->name('retailer.')->group(function () {
        Route::get('/', [RetailerController::class,'index'])->name('index');
        Route::get('/profile', [RetailerController::class,'profile'])->name('profile');
    });

    Route::prefix('/pickup-man')->name('pickup-man.')->group(function () {
        Route::get('/', [PickupManController::class,'index'])->name('index');
    });

    Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');

});

Route::name('front.')->middleware('auth')->group(function () {

    Route::get('/get-bazar/{val}', [FrontendController::class,'get_bazar']);

Route::prefix('sr')->middleware('sr')->name('sr.')->group(function () {
    Route::get('/', [FSRController::class,'retailer'])->name('index');
    Route::get('/summary', [FSRController::class,'summary'])->name('summary');
    Route::get('/retailer', [FSRController::class,'retailer'])->name('retailer');
    Route::get('/check-retailer/{val}', [FSRController::class,'check_retailer'])->name('check-retailer');
    Route::get('/route', [FSRController::class,'route'])->name('route');
    Route::post('/route', [FSRController::class,'route_store'])->name('route.store');
    Route::get('/route/{day}', [FSRController::class,'route_by_day'])->name('route-by-day');
    Route::post('/retailer', [FSRController::class,'retailer_store'])->name('retailer.store');
    Route::post('/retailer/{id}', [FSRController::class,'retailer_update'])->name('retailer.update');
});

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
