<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\PrestasiController;
use App\Http\Controllers\Api\RegisterController;
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

Route::middleware(['auth:sanctum'])->group(function() {
    Route::post('logout-api',[RegisterController::class,'logout']);
});


Route::get('/daftar-prestasi/remaja',[PrestasiController::class,'prestasiRemaja']);
Route::get('/daftar-prestasi/sd',[PrestasiController::class,'prestasiSD']);
Route::get('/daftar-prestasi',[PrestasiController::class,'index']);

Route::post('daftar-ulang', [RegisterController::class,'daftarUlang']);


Route::apiResource('/daftar-gallery',GalleryController::class);
// Route::apiResource('/register-api', UserController::class);

Route::post('register-api',[RegisterController::class,'register']);
Route::post('login-api',[RegisterController::class,'login']);

Route::get('/users',[RegisterController::class,'users']);
Route::get('/users/{id}',[RegisterController::class ,'show']);

Route::get('/event',[EventController::class, 'apiEvent']);
