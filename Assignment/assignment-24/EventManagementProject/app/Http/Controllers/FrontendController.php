<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function HomePage(){
        return view('frontend.master');
    }
}
