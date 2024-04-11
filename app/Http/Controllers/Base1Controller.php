<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Base1Controller extends Controller
{
    public function terms(){
        return view('pages.terms');
     }
}
