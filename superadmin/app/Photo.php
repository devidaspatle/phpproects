<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
     protected $fillable = [
    'album_id',
    'title',
    'image',
    'is_active'
  ];
}
