<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immobile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'capacity',
        "status",
        "description",
        "value",
        "image",
    ];
    public function user()              {return $this->belongsTo(User::class);}
    public function immobileAdress()    {return $this->hasMany(ImmobileAdress::class);}
    public function roomImmobile()      {return $this->hasMany(RoomImmobile::class);}
    public function schedule()          {return $this->hasMany(Schedule::class);}
    
}
