<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
	    'patient_id',
		'user_id',
		'centre_id',
		'password',
		'patient_name',
		'mobile_number',
		'email',
		'weight',
		'height',
		'bmi',
		'blood_group',
		'allergy',
		'appropriate',
		'date_of_birth',
		'gender',
		'marital_status',
		'district',
		'consaltancy',
		'mode_payment',
		'city',
		'state',
		'country',
		'pincode',
		'address',
		'is_active',
  ];
}
