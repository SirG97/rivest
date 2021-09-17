<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(){
        return view('profile');
    }

    public function statement(){
        return view('statement');
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
