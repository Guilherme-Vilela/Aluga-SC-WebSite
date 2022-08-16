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
        return $this->belongsTo(User::class);
    }
    public function immobileAdress()
    {
        return $this->hasMany(ImmobileAdress::class);
    }
    public function roomImmobile()
    {
        return $this->hasMany(RoomImmobile::class);
    }
    public function furnitureImmobile()
    {
        return $this->hasMany(FurnitureImmobile::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function images()
    {

        return $this->hasMany(ImageImmobile::class, "immobile_id", "id");
    }
    public function addRooms($rooms,$rooms_generic)
    {
        $bedroom = Room::where('name', "Quarto")->first();
        $bathdroom = Room::where('name', "Banheiro")->first();
        
        $room = new RoomImmobile();
        $room->immobile_id = $this->id;
        $room->room_id =  $bathdroom->id;
        $room->quantity = $rooms['bathrooms'];
        $room->save();
        unset($room);

        $room = new RoomImmobile();
        $room->immobile_id = $this->id;
        $room->room_id = $bedroom->id;
        $room->quantity = $rooms['bedrooms'];
        $room->save();
        unset($room);

        //add rooms generic
        $rooms = explode(",", $rooms_generic);
        for ($i = 1; $i < count($rooms) ; $i++) {
            $room = new RoomImmobile();
            $room->immobile_id = $this->id;
            $room->room_id = $rooms[$i];
            $room->quantity = 1;
            $room->save();
            unset($room);
        }
        return true;
    }
    public function addFurniture($convenience,$furnitures_generic)
    {
        $double_bed = Furniture::where('name', "Cama de casal")->first();
        $single_bed = Furniture::where('name', "Cama de solteiro")->first();
        $couch = Furniture::where('name', "Sofa")->first();
        $furniture = new FurnitureImmobile();
        $furniture->immobile_id = $this->id;
        $furniture->furniture_id = $double_bed->id;
        $furniture->quantity = $convenience['double_bed'];
        $furniture->save();
        unset($furniture);
        
        $furniture = new FurnitureImmobile();
        $furniture->immobile_id = $this->id;
        $furniture->furniture_id = $single_bed->id;
        $furniture->quantity = $convenience['single_bed'];
        $furniture->save();
        unset($furniture);

        $furniture = new FurnitureImmobile();
        $furniture->immobile_id = $this->id;
        $furniture->furniture_id = $couch->id;
        $furniture->quantity = $convenience['couch'];
        $furniture->save();
        unset($furniture);
        // convenience
        $furnitures = explode(",", $furnitures_generic);
        for ($i = 1; $i < count($furnitures); $i++) {
            $furniture = new FurnitureImmobile();
            $furniture->immobile_id = $this->id;
            $furniture->furniture_id = $furnitures[$i];
            $furniture->quantity = 1;
            $furniture->save();
            unset($furniture);
        }
        return true;
    }
    public function addAddress($address)
    {
        $immobile_address = new ImmobileAdress();
        $immobile_address->number = $address['number'];
        $immobile_address->road = $address['road'];
        $immobile_address->district = $address['district'];
        $immobile_address->city = $address['city'];
        $immobile_address->state = $address['state'];
        $immobile_address->CEP = $address['cep'];
        $immobile_address->complement = $address['complement'];
        $immobile_address->immobile_id = $this->id;
        $immobile_address->save();
        return true;
    }
}
