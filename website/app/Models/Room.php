<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon',
        'status',
    ];
    public function roomFurniture()
    {
        return $this->hasMany(RoomFurniture::class);
    }
    public function roomImmobile()
    {
        return $this->hasMany(RoomImmobile::class);
    }
}
