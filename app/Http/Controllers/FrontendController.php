<?php

namespace App\Http\Controllers;

use Share;
use App\Models\Destination;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // home page
    public function homePage()
    {
        $destinations = Destination::latest()->get();
        $states = config('access.states');
        $popularDestinations = Destination::where('popular' ,'yes')->latest()->get();

        return view('frontend.pages.home', compact('states', 'destinations', 'popularDestinations'));
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
        return view('frontend.pages.destination.destinations');
    }


    // destinationsPage
    public function singleDestinationsPage(Request $request , $id, $slug)
    {
        $destination = Destination::where('id', $id)->where('slug', $slug)->first();
        $destination->images = json_decode($destination->images);
        $states = config('access.states');
        $category = config('access.destination_category');
        $state = array_filter($states, function($data) use ($destination){
            return $data['code'] == $destination->state;
        });
        $state = array_values($state);
        $state = $state[0];

        return view('frontend.pages.destination.single', compact('destination', 'state', 'category'));
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
