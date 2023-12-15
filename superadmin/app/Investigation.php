<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    protected $fillable = [
    'centre_id',
    'user_id',
    'investigations_name',
    'investigations_unit',
    'diagnosis_id',
    'is_active'
  ];
}
