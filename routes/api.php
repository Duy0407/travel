<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiCityController;
use App\Http\Controllers\restaurant\Api\AddRestaurantController;
use App\Http\Controllers\Api\ApiLoginController;

use App\Http\Controllers\Restaurant\RestaurantManagerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Lấy Quận Huyện Theo Id Thành Phố
Route::post('/district', [ApiCityController::class, 'getDistrictsByIdCity']);

// API Route thông tin chung
Route::post('/restaurant/save', [AddRestaurantController::class, 'store']);

// API Route tiện nghi & dịch vụ
Route::post('/Restaurant/SaveAmenitiesPolicy', [AddRestaurantController::class, 'saveAmenitiesPolicy']);

// API thiết lập sản phẩm
Route::post('/Restaurant/SaveProductSettings', [AddRestaurantController::class, 'saveProductSettings']);

// Api Route Login
Route::post('/authentication', [ApiLoginController::class, 'login']);

// Route Api GetUser(id)
Route::get('/GetUser', [RestaurantManagerController::class, 'index']);
