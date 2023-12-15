<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $fillable = ['project_id', 'name', 'mobile', 'email', 'address', 'city', 'state', 'pincode','status'];

}
