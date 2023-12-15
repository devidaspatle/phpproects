<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
     protected $fillable = [
        'patient_id',
    	'user_id',
    	'breakfast',
    	'lunch',
    	'dinner',
    	'instruction',
    	'noofb',
    	'price',
    	'supplements_id',
    	'is_active'
  ];
}

