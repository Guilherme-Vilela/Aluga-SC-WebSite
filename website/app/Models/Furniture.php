<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'capacity',
        'icon',
        'status'
    ];

    public function roomFurniture(){return $this->hasMany(RoomFurniture::class);}
    
}
