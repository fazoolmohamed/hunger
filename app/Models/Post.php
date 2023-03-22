<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        "content",
        "food",
        "cloths",
        "latitude",
        "longitude",
    ];
}
