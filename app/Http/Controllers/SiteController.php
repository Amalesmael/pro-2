<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function hi(){
        return view('welcome');
    }
    public function login(){
        return view('login');
    }
    public function aboutus(){
        return view('aboutus');
    }

}
