<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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

   
}
