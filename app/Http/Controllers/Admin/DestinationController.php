<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name'              => 'required',
            'state'             => 'required',
            // 'city'           => 'required',
            'description'       => 'required',
            'content'           => 'required',
            'category'          => 'required',
            'featured_image'    => 'required',
        ]);

        $destinationFilePath = '/uploads/destinations/';

        // featured image
        if(isset($request->featured_image))
        {
            $image = $request->featured_image;
            
            $extension = $image->getClientOriginalExtension();
            $baseName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $baseName. '.' .$extension;

            $image->move(public_path($destinationFilePath), $fileName);

            $input['featured_image'] = $destinationFilePath.$fileName;;
        }

        // other images
        if(isset($request->images))
        {
            $allImages = [];
            $images = $request->images;
            foreach($images as $key => $image)
            {
                $extension = $image->getClientOriginalExtension();
                $baseName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $fileName = $baseName. '.' .$extension;

                $image->move(public_path($destinationFilePath), $fileName);

                $allImages[$key] = $destinationFilePath.$fileName;
            }

            $input['images'] = json_encode($allImages);
        }

        $input['slug'] = Str::slug($request->name, '-');

        Destination::create($input);

        return back()->with('success', 'Successfully created destination.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
