<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Income;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function DashboardPage(Request $request){

        $user_id = $request->header('id');
        $totalIncome = Income::where('user_id', $user_id)->sum('amount');
        $totalExpense = Expense::where('user_id', $user_id)->sum('amount');
        return view('pages.dashboard.dashboard-page', compact('totalIncome', 'totalExpense'));
    }
}
