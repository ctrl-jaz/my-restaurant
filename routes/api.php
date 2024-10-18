<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\CategoryController;
use App\http\Controllers\Authcontroller;

Route::post ('/register', [Authcontroller::class, 'register']);
Route::post ('/login', [Authcontroller::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResources([
    'categories'=>CategoryController::class,
]);