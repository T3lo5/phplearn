<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function hello(Request $request)
    {
        return 'Hello '.$request->name;
    }
}
