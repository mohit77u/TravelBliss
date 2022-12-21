<?php

// all frontend routed here

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// frontend routes
Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'homePage')->name('home.get');
    Route::post('/search', 'searchResults')->name('search.post');
    Route::get('/destinations', 'destinationsPage')->name('destinations.get');
    Route::get('/gallery', 'galleryPage')->name('gallery.get');
    Route::get('/news', 'newsPage')->name('news.get');
    Route::get('/about', 'aboutPage')->name('about.get');
    Route::get('/contact', 'contactPage')->name('contact.get');
});