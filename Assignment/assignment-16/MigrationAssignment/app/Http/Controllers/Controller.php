<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

function getExcerptDescription() {
    $posts = DB::table( 'posts' )->select( 'excerpt', 'description' )->get();
    return $posts;
    }

    function firstRecordDescription() {
        $posts = DB::table( 'posts' )->where( 'id', '=', '2' )->first();
        return $posts->description;
        }

        function getDescription() {
            $posts = DB::table( 'posts' )->where( 'id', 2 )->pluck( 'description' );
        }

        function getAllTitle() {
            $posts = DB::table( 'posts' )->select( 'title' )->get();
            return $posts;
            }