<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


// all backend routed here
// backend routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard', 'getDashboardPage')->name('dashboard.get');
    });
});