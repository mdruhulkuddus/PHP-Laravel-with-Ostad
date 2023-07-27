<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\TokenVerifyMiddleware;

Route::middleware( 'auth:sanctum' )->get( '/user', function ( Request $request ) {
    return $request->user();
} );


Route::post('/user-registration', [AuthController::class, 'UserRegistration']);
Route::post('/user-login', [AuthController::class, 'UserLogin']);
Route::post('/send-otp-code', [AuthController::class, 'SendOTPCode']);
Route::post('/verify-otp', [AuthController::class, 'VerifyOTP']);
// verify token by middleware
Route::post('/reset-password', [AuthController::class, 'ResetPassword'])->middleware([TokenVerifyMiddleware::class]);


Route::controller( TodoController::class )->group( function () {
    Route::middleware([TokenVerifyMiddleware::class])->group( function () {
        Route::get( '/todo-list', 'index' );
        Route::post( '/todo', 'createTodo' );
        Route::patch( '/todo/{id}', 'updateTodo' );
        Route::delete( '/todo/{id}', 'deleteTodo' );
    } );
} );
