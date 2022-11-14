<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedDeposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount_earned',
        'amount',
        'withdrawn',
        'interest',
        'duration',
        'paid',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
