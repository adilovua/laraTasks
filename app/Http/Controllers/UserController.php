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
    public function ShowCity($user){
        $users=[
            'Umid'=>'Tashkent',
            'John'=>'London',
            'Smith'=>'New York',
            'Ivan'=>'Moscow'
        ];

        if (key_exists($user, $users)){
            return "$user from $users[$user]";
        }
        else {
            return "$user i don`t know where are you from";
        }
    }
}
