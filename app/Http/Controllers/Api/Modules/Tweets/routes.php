<?php

use App\Http\Controllers\Api\Modules\Tweets\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

/********************* Tweet Routes *********************/
Route::name('tweet.')->prefix('v1/tweet')->group(function () {
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::post('/create', [TweetController::class, 'create']);
        Route::get('/{model}', [TweetController::class, 'getById']);
        Route::get('/', [TweetController::class, 'timeline']);
    });
});

