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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
										
// Route::middleware('auth:api')->get('/user', function (Request $request) {									
// 	return $request->user();									
// 	});									
										
	// create api									
	// Route::get('/get-product',[App\Http\Controllers\APIController::class,'getProducts']);									
															
										
	// Route::get('/get-product/{id}', [APIController::class,'getOneProduct']);									
	// Route::post('/add-product',[APIController::class,'addProduct']);									
	// Route::delete('/delete-product/{id}',[APIController::class,'deleteProduct']);									
	// Route::put('/edit-product/{id}',[APIController::class,'editProduct']);									
										
	// Route::post('/upload-image',[APIController::class,'uploadImage']);									
	// Route::get('/get-lazada',[App\Http\Controllers\APIController::class,'getLazada']);
	// Route::post('/addsp',[App\Http\Controllers\APIController::class,'addsp']);

	// Route::get('/get-user',[App\Http\Controllers\LoginController::class,'getAccount']);