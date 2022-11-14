<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\FixedDeposit;
use App\Models\Loan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $account = Account::where('user_id', auth()->user()->id)->first();
        $loan = Loan::where('user_id', auth()->user()->id)->sum('amount');
        $fixedDeposit = FixedDeposit::where('user_id', auth()->user()->id)->sum('amount') ;
        return view('dashboard', ['account' => $account, 'loan' => $loan, 'fixedDeposit' => $fixedDeposit]);
    }

    public function profile(){
        $account = Account::where('user_id', auth()->user()->id)->first();
        return view('profile', ['account' => $account]);
    }



    public function fund(){
        return view('fund');
    }

    public function changePassword(){
        return view('changepassword');
    }

    public function changePin(){
        return view('changepin');
    }
}
