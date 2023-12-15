<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goldrate extends Model
{
    protected $fillable = [
    'gold_rate',
    'carat',
    'status'
  ];
}
