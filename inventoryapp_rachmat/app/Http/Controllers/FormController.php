<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function signup()
    {
        return view('pages.register');
    }
    public function beranda(Request $request)
    {
        $fname=$request -> input('first_name');
        $lname=$request -> input('last_name');

        return view('pages.welcome', compact('fname', 'lname'));
    }
}
