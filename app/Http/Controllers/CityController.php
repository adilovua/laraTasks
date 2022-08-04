<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;

class CityController extends Controller
{
   public function show(){
       $Cities = Country::with('cities')->get();
       //dd($getCities->country);
        foreach ($Cities as $City) {
            dump($City);
            //dump($Country->city);
        }

       /* return view('myviews.CitiesInCountry',
        [
          'title' => 'Cities',
          'Countries' => $getCountries,
          'Cities' => $Cities
        ]);*/
   }

}
