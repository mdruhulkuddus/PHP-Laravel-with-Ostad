<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    function incomePage(){
        return view('pages.dashboard.income-page');
    }

    function IncomeCreate(Request $request){
      //  dd($request->all());
        $user_id = $request->header('id');
        return Income::create([
            'income_category' => $request->input('incomeCategory'),
            'date' => $request->input('entryDate'),
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'user_id' => $user_id
        ]);
    }

    function IncomeList(Request $request){
        $user_id = $request->header('id');
        return Income::where('user_id', $user_id)->get();
    }

    function IncomeDelete(Request $request){
        $income_id = $request->input('id');
        $user_id = $request->header('id');
        return Income::where('id', $income_id)->where('user_id', $user_id)->delete();
    }
}
