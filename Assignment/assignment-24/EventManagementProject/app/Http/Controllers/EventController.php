<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function EventPage(){
        $categories = Category::all();
        return view('pages.dashboard.event-page', compact('categories'));
    }

    function EventCreate(Request $request){
        $user_id = $request->header('id');
        return Event::create([
            'category_id' => $request->input('categoryID'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'location' => $request->input('location'),
            'user_id' => $user_id
        ]);
    }

    function EventList(Request $request){
        $user_id = $request->header('id');
        return Event::where('user_id', $user_id)->get();
    }

    function EventDelete(Request $request){
       $event_id = $request->input('id');
        $user_id = $request->header('id');
        return Event::where('id', $event_id)->where('user_id', $user_id)->delete();
    }

}
