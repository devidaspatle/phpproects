<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    protected $fillable = [
    'formulas_name',
    'formulas_rate',
    'is_active'
  ];
  
}
