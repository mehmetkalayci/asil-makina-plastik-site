<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configs extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'email1',
        'email2',
        'email3',
        'address',
        'gmap_url',
        'opening_hours',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'movie_url',
        'about_text_plastik',
        'about_text_makine',
        'about_image_plastik',
        'about_image_makine',
        'promotional_film'
    ];
}
