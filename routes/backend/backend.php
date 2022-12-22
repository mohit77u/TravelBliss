<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Livewire\CreateDestination;
use Illuminate\Support\Facades\Route;


// all backend routed here
// backend routes
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']], function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard', 'getDashboardPage')->name('dashboard.get');
    });

    // destinations route
    Route::controller(DestinationController::class)->group(function(){
        Route::resource(
            'destinations',
            'DestinationController',
            ['names' => 'admin.destinations']
        );
    });

});