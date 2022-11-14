<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'balance', 'ledger_balance', 'status', 'account_number', 'account_name', 'account_type'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
