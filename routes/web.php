<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OauthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oauth/login/openstreetmap', [OauthController::class, 'redirect_openstreetmap']);
Route::get('/oauth/complete/openstreetmap', [OauthController::class, 'callback_openstreetmap']);
//Route::get('/oauth/login/mediawiki', [OauthController::class, 'redirect_mediawiki']);
//Route::get('/oauth/complete/mediawiki', [OauthController::class, 'callback_mediawiki']);
