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

    // search post
    public function searchResults(Request $request)
    {
        dd($request->all());
        return view('frontend.pages.home');
    }

}
