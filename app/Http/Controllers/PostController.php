<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            dump($post->title);
            dump($post->body);
        }
    }
    public function form()
    {
        return view('myviews.form', ['title'=>'Form']);
    }
    public function form1()
    {
        return view('myviews.form-1', ['title'=>'Form-1']);
    }

    public function result(Request $request)
    {
        $res = $request->number_1+$request->number_2+$request->number_13;

        return view('myviews.result',
        [
            'title'=>'result',
            'result' => $res
        ]);
    }

    public function result1(Request $request)
    {
        $Name = $request->name;
        $age = $request->age;
        $salary = $request->salary;
        return view('myviews.result-1',
            [
                'title'=>'result-1',
                'name' => $Name,
                'age' => $age,
                'salary' => $salary
            ]);
    }
}
