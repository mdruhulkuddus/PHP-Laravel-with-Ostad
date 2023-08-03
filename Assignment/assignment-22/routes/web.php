<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerifyMiddleware;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PromotionalMailController;

// login & registration routes
Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::post('/user-login', [UserController::class, 'UserLogin']);
Route::post('/send-otp-code', [UserController::class, 'SendOTPCode']);
Route::post('/verify-otp', [UserController::class, 'VerifyOTP']);
Route::post('/reset-password', [UserController::class, 'ResetPassword'])->middleware([TokenVerifyMiddleware::class]);
Route::get('/user-profile', [UserController::class, 'UserProfile'])->middleware([TokenVerifyMiddleware::class]);
Route::post('/update-profile', [UserController::class, 'UpdateProfile'])->middleware([TokenVerifyMiddleware::class]);
Route::get('logout', [UserController::class, 'UserLogout']);


// Page Routes
Route::get('/userLogin',[UserController::class,'LoginPage']);
Route::get('/userRegistration',[UserController::class,'RegistrationPage']);
Route::get('/sendOtp',[UserController::class,'SendOtpPage']);
Route::get('/verifyOtp',[UserController::class,'VerifyOTPPage']);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage'])->middleware([TokenVerifyMiddleware::class]);
Route::get('/dashboard',[DashboardController::class,'DashboardPage'])->middleware([TokenVerifyMiddleware::class]);
Route::get('/userProfile',[UserController::class,'ProfilePage'])->middleware([TokenVerifyMiddleware::class]);


// customer and promotional mail router
Route::middleware( 'verify.token' )->group( function () {
    Route::controller( CustomerController::class )->group( function () {
        //Api Routes
        Route::delete( '/customers/{id}', 'deleteCustomer' )->name( 'delete.customer' );
        Route::post( '/customers/{id}', 'updateCustomer' )->name( 'update.customer' );
        Route::get( '/customers/{id}', 'singeCustomer' )->name( 'single.customer' );
        Route::post( '/customers', 'addCustomer' )->name( 'add.customer' );
        Route::get( '/customers', 'getCustomers' )->name( 'customers' );

        //Page Routes
        Route::get( '/customer/list', 'customerPage' )->name( 'customer.page' );
    } );

    Route::controller( PromotionalMailController::class )->group( function () {
        //Api Routes
        Route::post( '/promotional/mail', 'sendPromotionMail' )->name( 'promotion.mail' );
        Route::get( '/promotional/mail', 'promotionPage' )->name( 'promotion.page' );
    } );
} );
