<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webcontent extends Model
{
     protected $fillable = [
    'title',
    'description',
    'image',
    'status'
  ];
}
