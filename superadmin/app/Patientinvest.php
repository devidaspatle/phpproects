<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patientinvest extends Model
{
    protected $fillable = [
    'user_id',
    'patient_id',
    'diabetes_value',
    'diabetes_id',
    'status'
  ];
}
