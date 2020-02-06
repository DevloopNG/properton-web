<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    public function index() 
    {
        return view('frontPages.index');
    }

    // public function about() 
    // {
    //     return view('frontPages.about');
    // }


    // public function contact() 
    // {
    //     return view('frontPages.contact');
    // }

    public function invest() 
    {
        return view('frontPages.invest');
    }

    public function signUp() 
    {
        return view('auth.register');
    }

    public function signIn() 
    {
        return view('auth.login');
    }
}
