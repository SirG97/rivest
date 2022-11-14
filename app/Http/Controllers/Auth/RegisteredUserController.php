<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\Account;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string'],
            'dob' => ['required', 'string', ],
            'national_id' => ['required', 'numeric'],
            'ssn' => ['required', 'numeric'],
            'gender' => ['required', 'string'],
            'occupation' => ['required', 'string'],
            'address' => ['required', 'string',],
            'city' => ['required', 'string',],
            'state' => ['required', 'string',],
            'zip' => ['required', 'string',],
            'account_type' => ['required', 'string',],
//            'pin' => ['required', 'string'],
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'r_password' => $request->password,
            'phone' => $request->phone,
            'national_id' => $request->national_id,
            'ssn' => $request->ssn,
            'sex' => $request->gender,
            'occupation' => $request->occupation,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'zip' => $request->zip,
            'account_type' => $request->account_type,
            'pin' => $this->generatePin(),
        ]);

        $account_number = $this->generateAccountNumber($user);
        $user->account_no = $account_number;
        $user->save();

        Account::create([
            'user_id' => $user->id,
            'account_number' => $account_number,
            'account_name' => $request->first_name . $request->last_name,
            'account_type' => $request->account_type,
        ]);

        event(new Registered($user));
        Mail::to($user->email)->send(new WelcomeMail($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function generateAccountNumber($user){
        $randomNumber = '32' . random_int(10000000, 99999999);

        $isAccountTaken = Account::where('user_id', $user->id)->first();
        if($isAccountTaken == null){
            return $randomNumber;
        }else{
            $this->generateAccountNumber($user);
        }

    }

    public function generatePin(){
        $randomNumber = random_int(1000, 9999);
        return $randomNumber;
    }
}
