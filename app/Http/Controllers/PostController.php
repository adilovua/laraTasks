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

    public function result(Request $request)
    {
        $res = $request->number_1+$request->number_2+$request->number_13;
        
        return view('myviews.result',
        [
            'title'=>'result',
            'result' => $res
        ]);
    }
}
