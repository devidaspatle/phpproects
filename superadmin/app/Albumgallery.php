<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albumgallery extends Model
{
    protected $fillable = [
    'title',
    'image',
    'is_active'
  ];
}
