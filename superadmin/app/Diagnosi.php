<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosi extends Model
{
   protected $fillable = [
    'diagnosis_name',
    'is_active'
  ];
}
