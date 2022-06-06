<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdress extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'road',
        'district',
        'city',
        'state',
        'CEP',
        'complement',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
