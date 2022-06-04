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
}
