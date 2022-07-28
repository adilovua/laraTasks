<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\country;

class CityController extends Controller
{
   public function show(){
       $getCountries = Country::all();
       $Cities=array();
        foreach ($getCountries as $Country) {

            $Cities[$Country->name] = $Country
                                        ->cities()
                                        ->orderBy('population')
                                        ->get();
        }

        return view('myviews.CitiesInCountry',
        [
          'title' => 'Cities',
          'Countries' => $getCountries,
          'Cities' => $Cities
        ]);
   }

}
