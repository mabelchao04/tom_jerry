<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\Api\Animal\AnimalLikeController;

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

Route::middleware(['auth:api', 'scope:user-info'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'animals' => AnimalController::class,
    'types' => TypeController::class,
]);

Route::apiResource('animals.likes', AnimalLikeController::class)->only(['index','store']);
