<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    protected $fillable = [
    'centre_name',
    'office_time',
    'office_open',
    'visit_days',
    'contact_person',
    'mobile_number',
    'city',
    'state',
    'pincode',
    'address',
    'username',
    'password',
    'is_active'
  ];
}
