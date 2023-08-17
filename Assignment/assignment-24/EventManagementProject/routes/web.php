<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerifyMiddleware;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;

// login & registration routes
Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::post('/user-login', [UserController::class, 'UserLogin']);
Route::post('/send-otp-code', [UserController::class, 'SendOTPCode']);
Route::post('/verify-otp', [UserController::class, 'VerifyOTP']);

// verify token by middleware
Route::post('/reset-password', [UserController::class, 'ResetPassword'])->middleware([TokenVerifyMiddleware::class]);

//profile
Route::get('/user-profile', [UserController::class, 'UserProfile'])->middleware([TokenVerifyMiddleware::class]);
Route::post('/update-profile', [UserController::class, 'UpdateProfile'])->middleware([TokenVerifyMiddleware::class]);

// logout
Route::get('logout', [UserController::class, 'UserLogout']);

// Page Routes
Route::get('/userLogin',[UserController::class,'LoginPage']);
Route::get('/userRegistration',[UserController::class,'RegistrationPage']);
Route::get('/sendOtp',[UserController::class,'SendOtpPage']);
Route::get('/verifyOtp',[UserController::class,'VerifyOTPPage']);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage'])->middleware([TokenVerifyMiddleware::class]);
Route::get('/dashboard',[DashboardController::class,'DashboardPage'])->middleware([TokenVerifyMiddleware::class]);
Route::get('/userProfile',[UserController::class,'ProfilePage'])->middleware([TokenVerifyMiddleware::class]);
Route::get('/categoryPage',[CategoryController::class,'CategoryPage'])->middleware([TokenVerifyMiddleware::class]);
Route::get('/eventPage',[EventController::class,'EventPage'])->middleware([TokenVerifyMiddleware::class]);

// Event Category API
Route::post('/create-category',[CategoryController::class,'CategoryCreate'])->middleware([TokenVerifyMiddleware::class]);
Route::get('/list-category',[CategoryController::class,'CategoryList'])->middleware([TokenVerifyMiddleware::class]);
Route::post('/delete-category',[CategoryController::class,'CategoryDelete'])->middleware([TokenVerifyMiddleware::class]);
Route::post('/update-category',[CategoryController::class,'CategoryUpdate'])->middleware([TokenVerifyMiddleware::class]);

// Event API
Route::post('/create-event',[EventController::class,'EventCreate'])->middleware([TokenVerifyMiddleware::class]);
Route::get('/list-event',[EventController::class,'EventList'])->middleware([TokenVerifyMiddleware::class]);
Route::post('/delete-event',[EventController::class,'EventDelete'])->middleware([TokenVerifyMiddleware::class]);
Route::post('/update-event',[EventController::class,'EventUpdate'])->middleware([TokenVerifyMiddleware::class]);

// Frontend Routes
Route::get('/', [FrontendController::class, 'HomePage']);
