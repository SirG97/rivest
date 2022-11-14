<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function localTransfer(){
        $account = Account::where('user_id', auth()->user()->id)->first();
        return view('transfers.domestic', compact('account'));
    }

    public function storeLocalTransfer(Request $request){
        $request->validate([
            'account_type' => 'required',
            'account_no' => 'required|numeric',
            'account_name' => 'required',
            'amount' => 'required|numeric',
            'description' => 'required',
            'pin' => 'required',
        ]);

        if($request->pin !== auth()->user()->pin) return redirect()->back()->with('error', 'Incorrect Transaction pin');

        // Get account
        $account = Account::where('account_number', auth()->user()->account_no)->first();

        if($account === null ) return redirect()->back()->with('error', 'An error has occurred in your account, please contact customer support');

        if($account->balance < $request->amount) return redirect()->back()->with('error', 'Insufficient fund');

        $reciever = Account::where('account_number', $request->account_no)->first();

        if($reciever === null) return redirect()->back()->with('error', 'Beneficiary account not found');
        if($reciever->account_number === auth()->user()->account_no) return redirect()->back()->with('error', 'You cant transfer to yourself');
        $d = [
            'user_id' => auth()->user()->id,
            'txn_ref' => Str::random(10),
            'txn_type' => 'debit',
            'amount' => $request->amount,
            'option' => 'cash',
            'purpose' => 'transfer',
            'description' => $request->description,
            'balance_before' => $account->balance,
            'balance_after' => $account->balance - $request->amount,
            'status' => 'pending',
            'receiver' => $reciever->account_number,
            'bank_name' => $request->bank_name,
            'swift_code' => $request->swift_code,
            'account' => $account
        ];

        $request->session()->put('data', $d);
        return  $this->otpEmail();

    }

    public function interBankTransfer(){
        $account = Account::where('user_id', auth()->user()->id)->first();
        return view('transfers.interbank', compact('account'));
    }


    public function storeInterBankTransfer(Request $request){
        $request->validate([
            'account_type' => 'required',
            'account_no' => 'required|numeric',
            'account_name' => 'required',
            'bank_name' => 'required',
            'amount' => 'required|numeric',
            'description' => 'required',
            'pin' => 'required',
        ]);

        if($request->pin !== auth()->user()->pin) return redirect()->back()->with('error', 'Incorrect Transaction pin');


        // Get account
        $account = Account::where('account_number', auth()->user()->account_no)->first();

        if($account === null ) return redirect()->back()->with('error', 'An error has occurred in your account, please contact customer support');

        if($account->balance < $request->amount) return redirect()->back()->with('error', 'Insufficient fund');
        $d = [
            'user_id' => auth()->user()->id,
            'txn_ref' => Str::random(10),
            'txn_type' => 'debit',
            'amount' => $request->amount,
            'option' => 'cash',
            'purpose' => 'transfer',
            'description' => $request->description,
            'balance_before' => $account->balance,
            'balance_after' => $account->balance - $request->amount,
            'status' => 'pending',
            'receiver' => $request->account_no,
            'bank_name' => $request->bank_name,
            'swift_code' => $request->swift_code,
            'account' => $account
        ];

        $request->session()->put('data', $d);
        return  $this->otpEmail();
    }


    public function internationalTransfer(){
        $account = Account::where('user_id', auth()->user()->id)->first();
        return view('transfers.wire',  compact('account'));
    }

    public function storeInternationalTransfer(Request $request){
        $request->validate([
            'account_type' => 'required',
            'account_no' => 'required|numeric',
            'account_name' => 'required',
            'bank_name' => 'required',
            'amount' => 'required|numeric',
            'description' => 'required',
            'swift_code' => 'required|numeric',
            'pin' => 'required',
        ]);

        if($request->pin !== auth()->user()->pin) return redirect()->back()->with('error', 'Incorrect Transaction pin');

        // Get account
        $account = Account::where('account_number', auth()->user()->account_no)->first();

        if($account === null ) return redirect()->back()->with('error', 'An error has occurred in your account, please contact customer support');

        if($account->balance < $request->amount) return redirect()->back()->with('error', 'Insufficient fund');
        $d = [
            'user_id' => auth()->user()->id,
            'txn_ref' => Str::random(10),
            'txn_type' => 'debit',
            'amount' => $request->amount,
            'option' => 'cash',
            'purpose' => 'transfer',
            'description' => $request->description,
            'balance_before' => $account->balance,
            'balance_after' => $account->balance - $request->amount,
            'status' => 'pending',
            'receiver' => $reciever->account_number,
            'bank_name' => $request->bank_name,
            'swift_code' => $request->swift_code,
            'account' => $account
        ];

        $request->session()->put('data', $d);
        return  $this->otpEmail();

    }

    public function otpEmail(){
        return view('otps.email');
    }

    public function otpEmailVerify(Request $request){
        //Check user table for otp
        if($request->otp !== auth()->user()->otp){
            Session::flash('error','Invalid or expired OTP');
            return view('otps.email');
        }

        if(auth()->user()->no_of_otp > 1){
            Session::forget('error');
            return $this->otpCot();
        }else{
            $data = $request->session()->get('data');
            if($this->isDuplicateTransaction($data['txn_ref'])) {
                return redirect()->route('statement')->with('error', 'Operation aborted. Duplicate transaction detected.');
            }
            $this->createTransaction($request->session()->get('data'));

            return redirect()->route('statement')->with('success', 'Transaction is being processed');
        }

    }

    public function otpCot(){
        return view('otps.cot');
    }

    public function otpCotVerify(Request $request){
        //Check user table for otp
        if($request->cot !== auth()->user()->cot){
            Session::flash('error','Invalid COT code');
            return view('otps.cot');
        }

        if(auth()->user()->no_of_otp > 2){
            Session::forget('error');
            return $this->otpTax();
        }else{
            $data = $request->session()->get('data');
            if($this->isDuplicateTransaction($data['txn_ref'])) {
                return redirect()->route('statement')->with('error', 'Operation aborted. Duplicate transaction detected.');
            }
            $this->createTransaction($request->session()->get('data'));
            return redirect()->route('statement')->with('success', 'Transaction is being processed');
        }
    }

    public function otpTax(){
        return view('otps.tax');
    }

    public function otpTaxVerify(Request $request){
        //Check user table for otp
        if($request->tax !== auth()->user()->taxi){
            Session::flash('error','Invalid Tax code');
            return view('otps.tax');
        }

        if(auth()->user()->no_of_otp > 3){
            Session::forget('error');
            return $this->otpTlp();
        }else{

            $data = $request->session()->get('data');
            if($this->isDuplicateTransaction($data['txn_ref'])) {
                return redirect()->route('statement')->with('error', 'Operation aborted. Duplicate transaction detected.');
            }
            $this->createTransaction($request->session()->get('data'));
            return redirect()->route('statement')->with('success', 'Transaction is being processed');
        }
    }

    public function otpTlp(){
        return view('otps.tlp');
    }

    public function otpTlpVerify(Request $request){
        //Check user table for otp
        if($request->tlp !== auth()->user()->tfpc){
            Session::flash('error','Invalid Terrorist Financing Prevention Code');
            return view('otps.tlp');
        }

        if(auth()->user()->no_of_otp > 4){
            Session::forget('error');
            return $this->otpMlp();
        }else{
            $data = $request->session()->get('data');
            if($this->isDuplicateTransaction($data['txn_ref'])) {
                return redirect()->route('statement')->with('error', 'Operation aborted. Duplicate transaction detected.');
            }
            $this->createTransaction($request->session()->get('data'));
            return redirect()->route('statement')->with('success', 'Transaction is being processed');
        }
    }
    public function otpMlp(){
    }

    public function otpMlpVerify(Request $request){
        //Check user table for otp
        if($request->mlp !== auth()->user()->mlpc){
            Session::flash('error','Invalid Money Laundering Prevention Code');
            return view('otps.mlp');
        }
        $data = $request->session()->get('data');
        if($this->isDuplicateTransaction($data['txn_ref'])) {
            return redirect()->route('statement')->with('error', 'Operation aborted. Duplicate transaction detected.');
        }
        $this->createTransaction($request->session()->get('data'));

        return redirect()->route('statement')->with('success', 'Transaction is being processed');

    }

    public function createTransaction($data){
        Transaction::create([
            'user_id' => $data['user_id'],
            'txn_ref' => $data['txn_ref'],
            'txn_type' => $data['txn_type'],
            'amount' => $data['amount'],
            'option' => $data['option'],
            'purpose' => $data['purpose'],
            'description' => $data['description'],
            'balance_before' => $data['balance_before'],
            'balance_after' => $data['balance_after'],
            'status' => $data['status'],
            'receiver' => $data['receiver'],
            'bank_name' => $data['bank_name'],
            'swift_code' => $data['swift_code']
        ]);
        $account = $data['account'];
        $account->balance -= $data['amount'];
        $account->save();

    }

    public function isDuplicateTransaction($reference){
        $transaction = Transaction::where('txn_ref', $reference)->first();
        if($transaction === null){
            return false;
        }
        return true;
    }
}
