<?php

use App\Http\Controllers\Api\Modules\Users\Controllers\RegistrationController;
use App\Http\Controllers\Api\Modules\Users\Controllers\LoginController;
use App\Http\Controllers\Api\Modules\Users\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::name('user.')->prefix('v1/user')->group(function () {

    /********************* Authentication Routes *********************/
    Route::post('/register', [RegistrationController::class, 'register']);
    Route::middleware('throttle:10,60')->group(function () {
        Route::post('/login', [LoginController::class, 'login'])->name('login');
    });

    /********************* User  Routes *********************/
    Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('logout', [LoginController::class, 'logout']);
    Route::get('/{model}', [UserController::class, 'getById']);
    Route::delete('/{model}', [UserController::class, 'delete']);
    Route::get('/{user}/follow', [UserController::class, 'follow']);

});
});
