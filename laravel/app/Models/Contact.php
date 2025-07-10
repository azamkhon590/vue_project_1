<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        "phone",
        "email",
        "address",
        "time_start",
        "time_end",
        "social_links",
        "map_iframe",
    ];

    protected $casts= [
        "social_links" => "json"
    ];
}
