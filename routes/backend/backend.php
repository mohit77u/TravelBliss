<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateDestination;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DestinationController;


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

    // invoice
    Route::controller(InvoiceController::class)->group(function(){
        Route::get(
            'invoice',
            'makeInvoice',
            ['names' => 'admin.invoice']
        );

        // Route::get(
        //     'send-sms',
        //     'sendSMS',
        //     ['names' => 'admin.send-sms']
        // );
    });

});