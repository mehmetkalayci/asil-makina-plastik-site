<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [

        "title",
        "mission",
        "vision",
        "values",
        "about",
        "about_footer",
        "image",
        "promotional_film",
        "site",
        "language",

    ];
}
