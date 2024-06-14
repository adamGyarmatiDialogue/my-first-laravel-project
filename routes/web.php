<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * App routes
 */

Route::get('/', [HomeController::class, "home"]);
Route::get('/sign-up', [FrontendController::class, "signUp"]);
Route::get('/sign-in', [FrontendController::class, "signIn"]);


/**
 * API routes
 */

Route::post('/api/v1/users', function () {
	echo "Hello";
});
