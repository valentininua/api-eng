<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\EngWordController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/data-2/', [EngWordController::class, 'index']);

Route::apiResources([
    'eng-word' => EngWordController::class,
]);

Route::get('reandom-text', [EngWordController::class, 'reandomText']);
