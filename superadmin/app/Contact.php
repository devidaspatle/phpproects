<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    'name',
    'designation',
    'loan_incharge',
    'phoneno',
    'status'
  ];
}