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
        'amount',
        'order_id',
        'ip',

    ];
    public function schedule(){return $this->hasMany(Schedule::class);}
}
