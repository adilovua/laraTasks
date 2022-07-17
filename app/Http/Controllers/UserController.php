<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($surname=null, $name=null)
    {
        $title = 'Greetings page';
        if (isset($surname) and isset($name)){
            return view('myviews.show',
            [
               'surname' => $surname,
               'name' => $name,
               'title' => $title
            ]);
        }
        return view('myviews.show',
        [
            'title' => $title
        ]);
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

    public function TestView(){
        $name = 'Umid';
        $age = 43;
        $salary = '1000 US dollars';
        return view('myviews.test',
            [
                'name' => $name,
                'age' => $age,
                'salary' => $salary,
                'title' => 'Test page'
            ]);
    }
}
