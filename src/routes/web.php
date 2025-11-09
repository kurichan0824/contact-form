<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\AuthController;


Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});

Route::get('/', [ContactController::class, 'index']);

Route::post('/contacts/confirm',[ContactController::class,'confirm']);

Route::post('/contacts',[ContactController::class,'store']);



Route::get('/middleware',[MiddlewareController::class,'index']);
Route::post('middleware',[MiddlewareController::class,'post'])->middleware(ContactMiddleware::class);



