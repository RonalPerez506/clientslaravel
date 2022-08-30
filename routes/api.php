<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group([
// ], function ($route) {
//     Route::apiResource('products', ProductController::class);
// });

Route::get('/productos', 'App\Http\Controllers\ProductController@index');

Route::post('/productos', 'App\Http\Controllers\ProductController@store');

Route::put('/productos/{id}', 'App\Http\Controllers\ProductController@update');

Route::delete('/productos/{id}', 'App\Http\Controllers\ProductController@destroy');

// Route::group([
// ], function ($route) {
//     Route::apiResource('clients', ClientController::class);
// });

Route::get('/clients', 'App\Http\Controllers\ClientController@index');

Route::get('/clients/{id}', 'App\Http\Controllers\ClientController@show');

Route::post('/clients', 'App\Http\Controllers\ClientController@store');

Route::put('/clients/{id}', 'App\Http\Controllers\ClientController@update');

Route::delete('/clients/{id}', 'App\Http\Controllers\ClientController@destroy');


// Route::prefix('clients')->group(function () {
//     Route::get('/',[ ClientController::class, 'index']);
//     Route::post('/',[ ClientController::class, 'store']);
//     Route::delete('/{id}',[ ClientController::class, 'destroy']);
//     Route::get('/{id}',[ ClientController::class, 'show']);
//     Route::put('/{id}',[ ClientController::class, 'update']);
// });