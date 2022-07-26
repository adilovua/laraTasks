<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\country;

class CityController extends Controller
{
   public function show(){
        $Countries = Country::find(1);
        dump($Countries->Cities);


   }
}
