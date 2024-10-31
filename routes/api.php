<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\CategoryController;
use App\http\Controllers\Authcontroller;
use App\http\Controllers\Menucontroller;
use App\http\Controllers\Orderscontroller;
use App\http\Controllers\Paymentcontroller;


Route::post ('/register', [Authcontroller::class, 'register']);
Route::post ('/login', [Authcontroller::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 


//Route::middleware(['auth:sanctum'])->group(function() {
    Route::apiResources([
        'categories'=>CategoryController::class,
        'menus'=>MenuController::class,
        'orders'=>OrdersController::class,
        'payment'=>PaymentController::class,

    ]);

    Route::get('/getOrderDetails/{id}',[OrdersController::class, 'getOrderDetails']);
//});