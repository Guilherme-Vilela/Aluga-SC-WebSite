<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'check_in',
        'check_out',
        'status',
    ];
    protected $dates = [
        'check_in',
        'check_out',
    ];

    public function immobiles(){
        return $this->belongsTo(Immobile::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function payment(){
        return $this->belongsTo(Payment::class);
    }

}
