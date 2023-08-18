<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    function HomePage(){
//        $events = Event::all();
        $events = DB::table('events')
            ->join('users', 'events.user_id', 'users.id' )
            ->join('categories', 'events.category_id', 'categories.id' )->get();
//        dd($events);
        return view('frontend.home', compact('events'));
    }
}
/*
 * $product = DB::table('products')
            ->join('authors','products.book_author_id','authors.id')
            ->join('categories','products.book_category_id','categories.id')
            ->join('publishers','products.book_publisher_id','publishers.id')
            ->select('products.*', 'authors.author_name', 'authors.author_image', 'authors.author_biography','categories.category_name', 'publishers.publisher_name')
            ->where('products.id', $id)
            ->first();
 */
