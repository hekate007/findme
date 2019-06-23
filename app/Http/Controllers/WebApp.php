<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebApp extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    
    public function home()
    {
        
    }

    public function myarea()
    {
        return view('lost');    }

    public function lost()
    {
        return view('person');
    }

    public function organiz()
    {
        return view('organiz');
    }
}
