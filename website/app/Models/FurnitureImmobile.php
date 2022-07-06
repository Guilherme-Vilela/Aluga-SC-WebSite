<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImmobileFurniture extends Model
{
    use HasFactory;

    protected $fillable = [
        'roomImmobile',
        'furtinureId',
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
