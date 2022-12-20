<?php

// all frontend routed here

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// frontend routes
Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'homePage')->name('home.get');
    Route::post('/search', 'searchResults')->name('search.post');
});