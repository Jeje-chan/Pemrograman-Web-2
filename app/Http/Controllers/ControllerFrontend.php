<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerFrontend extends Controller
{
    public function home(){
        return view('layout10.home');
    }
    public function about(){
        return view('layout10.about');
    }
}
