<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\country;

class CityController extends Controller
{
   public function show(){
        $Cities = Country::find(1)
            ->cities()
            ->where('population','>', 2500000)
            ->get();
        return view('myviews.CitiesInCountry',
        [
        'title' => 'Cities',
        'Cities' => $Cities
        ]);
   }

}
