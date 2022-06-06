<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImmobileAdress extends Model
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
    ];
    public function immobile(){return $this->belongsTo(Immobile::class);}
}
