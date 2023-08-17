<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function HomePage(){
        $events = Event::all();
        return view('frontend.home', compact('events'));
    }
}
