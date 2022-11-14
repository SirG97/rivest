<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'option','txn_ref','txn_type','purpose', 'amount',
        'balance_before', 'balance_after', 'description',  'remark', 'status', 'receiver', 'swift_code', 'bank_name'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
