<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable =[
        "title",
        "slug",
        "full_content",
        "short_content",
        "preview_url",
        "created_at",
    ];

    
}
