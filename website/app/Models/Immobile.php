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
        "user_id",
        "type",
        "rules"
    ];
    public function user()
    {
        return $this->belongsTo(User::class,"id","user_id");
    }
    public function immobileAdress()
    {
        return $this->hasMany(ImmobileAdress::class);
    }
    public function roomImmobile()
    {
        return $this->hasMany(RoomImmobile::class);
    }
    public function furnituremmobile()
    {
        return $this->hasMany(Furniture::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function images()
    {
        
        return $this->hasMany(ImageImmobile::class,"immobile_id","id");
    }
    public function addRooms($rooms)
    {
        $rooms = explode(",", $rooms);
        for ($i = 1; $i < count($rooms); $i++) {
            $room = new RoomImmobile();
            $room->immobile_id = $this->id;
            $room->room_id = $rooms[$i];
            $room->quantity = 1;
            $room->save();
            unset($room);
        }
        return true;
    }
    public function addFurniture($furnitures)
    {
        $furnitures = explode(",", $furnitures);
        for ($i = 1; $i < count($furnitures); $i++) {
            $furniture = new FurnitureImmobile();
            $furniture->immobile_id = $this->id;
            $furniture->furniture_id = $furnitures[$i];
            $furniture->save();
            unset($furniture);
        }
        return true;
    }
    public function addAddress($address)
    {
        $immobile_address = new ImmobileAdress();
        // $immobile_address->number = $request;
        // $immobile_address->road = $request;
        // $immobile_address->district = $request;
        // $immobile_address->city = $request;
        // $immobile_address->state = $request;
        // $immobile_address->CEP = $request;
        // $immobile_address->complement = $request;
        $immobile_address->immobile_id = $this->id;
        $immobile_address->save();
        return true;
    }
   
}
