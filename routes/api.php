<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthcontroller;
use App\Http\Controllers\BusnessCardcontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register',[UserAuthcontroller::class,'register']);
Route::post('login',[UserAuthcontroller::class,'login']);
  

  // routes/api.php
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/business_cards', [BusnessCardcontroller::class,'createBusinessCard'])->name('business_cards');
    Route::post('/update_business_cards/{id}', [BusnessCardcontroller::class,'updateBusinessCard'])->name('update_business_cards');
    Route::delete('/delete_card/{id}', [BusnessCardcontroller::class ,'deleteBusinessCard'])->name('delete_card');
    Route::get('getCards',[BusnessCardcontroller::class ,'getAllBusinessCards']);
    
    
    Route::post('logout',[UserAuthcontroller::class,'logout']);
});