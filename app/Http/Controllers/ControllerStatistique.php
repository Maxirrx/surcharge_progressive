<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerStatistique extends Controller
{
    public function index(){
        return view('statistique');
    }
}
