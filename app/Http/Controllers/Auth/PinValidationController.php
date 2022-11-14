<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PinValidationController extends Controller
{
    public function showPin(){
        return view('auth.pin');
    }

    public function validatePin(Request $request){
        $request->validate([
            'pin' => 'required'
        ]);

        if(auth()->user()->pin === $request->pin){
            return redirect('/dashboard');
        }else{
            return back()->with('status', 'Pin validation failed. please try again');
        }
    }
}
