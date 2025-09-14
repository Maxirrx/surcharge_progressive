<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCommunaute extends Controller
{
    public function index(){
        return view('communaute');
    }
}
