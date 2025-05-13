<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtNft extends Model
{
    //
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'category',
        'status',
        'creator_image',
        'creator_name',
    ];
}
