<?php

use App\Http\Controllers\Auth\MeController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Auth\SignOutController;
use App\Http\Controllers\SignUpController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'auth','namespace'=>'Auth'],function(){
    Route::post('sigin',[SignInController::class,'login']);
    Route::post('signout',[SignOutController::class,'logout']);
    Route::post('signup',[SignUpController::class,'register']);
   
    Route::get('me',[MeController::class,'me']);
});
