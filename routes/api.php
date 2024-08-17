<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(["prefix"=> "auth"], function () {
    Route::post("login", [App\Http\Controllers\Auth\AdminAuthController::class,"index"])->name("login.index");
    Route::get("logout", [App\Http\Controllers\Auth\AdminAuthController::class,"destroy"])->name("page.destroy");
});



Route::group(['prefix' => 'admin'], function () {
    Route::get('index', [App\Http\Controllers\API\Admin\AdminDashboard::class,'index'])->name('admin.index');
});


   