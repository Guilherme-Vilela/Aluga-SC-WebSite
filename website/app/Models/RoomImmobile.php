<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImmobile extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'immobile_id',
    ];

    public function immobiles(){
        return $this->belongsTo(Immobile::class);
    }
    public function room(){
        return $this->belongsTo(Room::class);
    }
}
