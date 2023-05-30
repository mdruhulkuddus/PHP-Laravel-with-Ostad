<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\posts;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorepostsRequest;
use App\Http\Requests\UpdatepostsRequest;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /*=======================================================================
   Task 1: Request Validation
    ========================================================================*/
    public function validation(StorepostsRequest $request)
    {
        $validatedData = $request->validated();
        return response()->json([
            'data' => $validatedData,
            'message' => 'Validation successful',
        ]);
    }

    /*=======================================================================
    task 2. Create a route /home that redirects to /dashboard using a 302 redirect.
    ========================================================================*/
    public function home()
    {
        return redirect('/dashboard');
    }
    public function dashboard()
    {
        return "I'm dashboard redirected from home";
    }

    /*====================================================================================
    task 3.Task 3: Global Middleware
    Need to check the log in storage/logs/laravel.log file to see the logs of my all routes.
    ====================================================================================*/
    public function checkLog()
    {
        return "please check the logs in laravel.log file";
    }

     /*====================================================================================
    Task 4: Route Middleware
    Apply a middleware called AuthMiddleware to the route group to ensure only authenticated users can access these routes.
    ====================================================================================*/
    public function profile(){
        return "Profile has been validated through AuthMiddleware ";
    }
    public function settings(){
        return "Settings has been validated through AuthMiddleware ";
    }
}



