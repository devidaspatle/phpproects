<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allopathic extends Model
{
     protected $fillable = [
     	'centre_id',
     	'patient_id',
	    'brand_name',
	    'generic_name',
	    'doses',
	    'is_active'
  ];
}
