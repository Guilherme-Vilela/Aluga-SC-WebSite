<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FurnitureImmobile extends Model
{
    use HasFactory;

    protected $fillable = [
        'immobile_id',
        'furtinure_id',
        'quantity',
    ];
    public function furniture()
    {
        return $this->belongsTo(Furniture::class);
    }
    public function immobile()
    {
        return $this->belongsTo(Immobile::class);
    }
    
}
