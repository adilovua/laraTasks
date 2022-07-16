<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($surname=null, $name=null)
    {
        if (isset($surname) and isset($name)){
            return "Hello $surname $name";
        }
        return 'Hello world';
    }
    public function all()
    {
        return 'Hello everyone';
    }
}
