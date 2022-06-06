<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFurniture extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'furtinure_id',
    ];
    public function furniture()
    {
        return $this->belongsTo(Furniture::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    
}
