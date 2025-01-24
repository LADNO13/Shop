<?php

use App\Http\Controllers\API\product\IndexController;
use App\Http\Controllers\API\product\ShowController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['api']], function () {
    Route::post('products', [IndexController::class, '__invoke']);
    Route::get('products/{product}', [ShowController::class, '__invoke']);
    Route::get('products/filters', [\App\Http\Controllers\API\product\FilterListController::class, '__invoke']);
});
