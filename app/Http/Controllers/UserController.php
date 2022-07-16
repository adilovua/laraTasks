<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return 'Hello world';
    }
    public function all()
    {
        return 'Hello everyone';
    }
}
