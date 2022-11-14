<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function statement(){
        // Transactions
        $transactions = Transaction::where('user_id', auth()->user()->id)->get();
        return view('statement', compact('transactions'));
    }
}
