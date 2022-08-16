<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageImmobile extends Model
{
    use HasFactory;
    protected $fillable = [
        "path_image",
        "immobile_id",
    ];

    public function immobile(){return $this->belongsTo(Immobile::class);}
    
}
