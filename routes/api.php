<?php

use App\Http\Controllers\Api\ApiController;
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


Route::get('/v1/states', [ApiController::class, 'getStates']);
Route::get('/v1/{state}/cities', [ApiController::class, 'getCitiesByStateCode']);
Route::post('/v1/image-upload', [ApiController::class, 'imagesUpload']);