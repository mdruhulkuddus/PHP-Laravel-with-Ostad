<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\ManagerController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('page.loginPage');});

//auth routes
Route::get('/registration-manager', [ManagerController::class, 'managerRegistration']);
Route::post('/login', [ManagerController::class, 'Login']);
Route::get('/logout', [ManagerController::class, 'Logout']);

//manager dashboard route
Route::get('/manager-employee-list', [ManagerController::class, 'employeeLeavesList'])->middleware(TokenVerificationMiddleware::class);
Route::post('/manager-employee-list-by-id', [ManagerController::class, 'employeeLeavesListById'])->middleware(TokenVerificationMiddleware::class);
Route::get('/managerDashboard', [ManagerController::class, 'managerDashPage'])->middleware(TokenVerificationMiddleware::class);
Route::get('/manager-reg-page', [ManagerController::class, 'managerRegistrationPage']);

//employee dashboard route
Route::post('/registration-employee', [EmployeeController::class, 'employeeRegistration']);
Route::get('/total-employee', [EmployeeController::class, 'TotalEmployee'])->middleware(TokenVerificationMiddleware::class);
Route::get('/employeeDashboard', [EmployeeController::class, 'employeeDashPage'])->middleware(TokenVerificationMiddleware::class);
Route::get('/emp-reg-page', [EmployeeController::class, 'EmpRegPage']);

//leave routes
Route::get('/get-leave-list', [LeaveController::class, 'GetList'])->middleware(TokenVerificationMiddleware::class);
Route::post('/create-leave', [LeaveController::class, 'CreateLeave'])->middleware(TokenVerificationMiddleware::class);
Route::post('/update-leave-status', [LeaveController::class, 'updateStatus'])->middleware(TokenVerificationMiddleware::class);
Route::get('/total-leaveApplication', [LeaveController::class, 'TotalLeaveApplication'])->middleware(TokenVerificationMiddleware::class);
Route::get('/total-pending-by-emp', [LeaveController::class, 'TotalPendingbyEmloyee'])->middleware(TokenVerificationMiddleware::class);
Route::get('/total-pending', [LeaveController::class, 'TotalPending'])->middleware(TokenVerificationMiddleware::class);



