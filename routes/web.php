<?php

use Illuminate\Support\Facades\Route;
//---------- Trang chủ Travel
use App\Http\Controllers\KhachHang\HomeTravelController;

//---------- Hợp tác
use App\Http\Controllers\KhachHang\HopTacController;

//---------- Restaurant
use App\Http\Controllers\Restaurant\UserRestaurantController;
use App\Http\Controllers\Restaurant\HomeRestaurantController;
use App\Http\Controllers\Restaurant\RestaurantManagerController;

//---------- Xác thực Mail
use App\Http\Controllers\EmailVerificationController;

//---------- Logout
use App\Http\Controllers\LogoutUserController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'hop-tac'], function(){
    Route::group(['middleware' => 'CheckSessionEmail'], function () {
        // Xác thực Mail
        Route::get('email-verification', [EmailVerificationController::class, 'index'])->name('viewEmail');
        Route::post('email-verification', [EmailVerificationController::class, 'veryEmail'])->name('veryEmail');
    });
    
    // Đăng ký & Đăng nhập (Restaurant)
    Route::get('login-restaurant', [UserRestaurantController::class, 'viewLogin'])->name('loginRestaurant');
    Route::post('login-restaurant', [UserRestaurantController::class, 'login'])->name('getLoginRestaurant');
    
    Route::get('register-restaurant', [UserRestaurantController::class, 'viewRegister'])->name('registerRestaurant');
    Route::post('register-restaurant', [UserRestaurantController::class, 'register'])->name('getRegisterRestaurant');
    

    // Route::get('/', [HopTacController::class, 'index'])->name('hoptac');
    Route::resource('/', HopTacController::class);

});

Route::group(['prefix' => 'restaurant'], function(){
    Route::group(['prefix' => 'manager'], function(){
        //*** Tạo nhà hàng
        Route::get('add', [RestaurantManagerController::class, 'create'])->name('createRestaurant');
        //*** Quản lý nhà hàng
        Route::get('/', [RestaurantManagerController::class, 'index'])->name('restaurant.manager.dashboard');
    });
    // Trang chủ (Nhà hàng)
    Route::resource('/', HomeRestaurantController::class);
});

Route::post('logout', [LogoutUserController::class, 'index'])->name('logout');

//--------------- Trang Chủ
Route::resource('/', HomeTravelController::class);
