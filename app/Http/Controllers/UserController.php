<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $users=DB::table('users')->get();
        return view('myviews.show', [
            'users'=> $users,
            'title' => 'Users Page'
        ]);
        //dump($users);
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
        $style = 'color:red;';
        $style_class = '.greenColor{color:green;}';
        $href = '/user/Umid/Adilov';
        $text = 'Open user page';

        $person = ['name'=>$name, 'age'=>$age, 'salary'=>$salary];

        return view('myviews.test',
            [
                'name' => $name,
                'age' => "<b> $age </b>",
                'salary' => $salary,
                'title' => 'Test page',
                'style' => $style,
                'styleClass' => $style_class,
                'href' => $href,
                'text' => $text,
                'person' => $person
            ]);
    }
}
