<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    function expensePage(){
        return view('pages.dashboard.expense-page');
    }

    function ExpenseCreate(Request $request){
        $user_id = $request->header('id');
        return Expense::create([
            'expense_category' => $request->input('expenseCategory'),
            'date' => $request->input('entryDate'),
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'user_id' => $user_id
        ]);
    }

    function ExpenseList(Request $request){
        $user_id = $request->header('id');
        return Expense::where('user_id', $user_id)->get();
    }

    function ExpenseDelete(Request $request){
        $income_id = $request->input('id');
        $user_id = $request->header('id');
        return Expense::where('id', $income_id)->where('user_id', $user_id)->delete();
    }
}
