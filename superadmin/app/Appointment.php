<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
     protected $fillable = [
     	'centre_id',
     	'patient_id',
     	'name',
	    'gender',
	    'age',
	    'mobile_number',
	    'patient_date',
     	'comments',
	    'is_active'
  ];
}
