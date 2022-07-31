<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\country;

class CityController extends Controller
{
   public function show(){
       $getCities = City::where('population', '>', 10000000)->get();
       //dd($getCities->country);

       $Cities=array();
        foreach ($getCities as $City) {
            dump($City);
            dump($City->country);
        }

       /* return view('myviews.CitiesInCountry',
        [
          'title' => 'Cities',
          'Countries' => $getCountries,
          'Cities' => $Cities
        ]);*/
   }

}
