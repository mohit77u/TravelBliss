<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    // get states
    public function getStates()
    {
        $statesList = config('access.states');
        $states = [];
        foreach ($statesList as $key => $state)
        {
            $states[$key] = [
                'code' => $state['code'],
                'state' => $state['state'],
            ];
        }
        return $states;
    }

    // get cities by state code
    public function getCitiesByStateCode($state)
    {
        $statesList = config('access.states');
        $filteredState = array_filter($statesList, function($data) use ($state){
            return $data['code'] == $state;
        });
        $cities = '';
        foreach ($filteredState as $state) 
        {
            $cities = $state['cities'];
        }
        return $cities;
    }

    // image upload from editor
    public function imageUploadFromEditor(Request $request)
    {
        $directory = '/uploads/editor/';
        if(isset($request->file))
        {
            $image = $request->file;
            $baseName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $extenison = $image->getClientOriginalExtension();
            $baseName = Str::slug($baseName, '-');
            $imageName = $baseName .'.'.$extenison;

            $filePath = $directory . $imageName;

            $image->move(public_path($directory),$imageName);

            return $filePath;

        }
        exit;
    }

   
}
