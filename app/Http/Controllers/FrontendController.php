<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // home page
    public function homePage()
    {
        return view('frontend.pages.home');
    }

    // galleryPage
    public function galleryPage()
    {
        return view('frontend.pages.gallery');
    }

    // newsPage
    public function newsPage()
    {
        return view('frontend.pages.news');
    }

    // destinationsPage
    public function destinationsPage()
    {
        return view('frontend.pages.destinations');
    }

    // aboutPage
    public function aboutPage()
    {
        return view('frontend.pages.about');
    }

    // contactPage
    public function contactPage()
    {
        return view('frontend.pages.contact');
    }

    // search post
    public function searchResults(Request $request)
    {
        dd($request->all());
        return view('frontend.pages.home');
    }



}
