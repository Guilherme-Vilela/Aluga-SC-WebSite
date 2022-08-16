<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'method',
        'status',
        'payment_id',
        'seller_id',
        'amount',
        'order_id',
        'transaction_id',
        'json',
        'session',
        'customer_id',
        'ip',

    

    ];
    public function schedule(){return $this->hasMany(Schedule::class);}
}
