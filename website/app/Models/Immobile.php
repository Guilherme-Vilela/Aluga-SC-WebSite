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
    public function furnituremmobile()
    {
        return $this->hasMany(Furniture::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function image_immobile()
    {
        return $this->hasMany(ImageImmobile::class);
    }
    public function addRooms($rooms)
    {
        $rooms = explode(",", $rooms);
        for ($i = 2; $i < count($rooms); $i++) {
            if ($i % 2) {
                $room = new RoomImmobile();
                $room->immobile_id = $this->id;
                $room->room_id = $rooms[$i];
                $room->save();
                unset($room);
            }
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
    public function addImage($file_image)
    {
        $image = new ImageImmobile();
        $image->path_image = 'image_users/user_' . auth()->user()->id . '/immobile_' . $this->id;
        $image->immobile_id = $this->id;
        $image->save();

        $file = $file_image;
        $filename = "room_" . $file->getClientOriginalName();
        $file->move(public_path('image_users/user_' . auth()->user()->id . '/immobile_' . $this->id), $filename);
        $data['image'] = $filename;
    }
}
