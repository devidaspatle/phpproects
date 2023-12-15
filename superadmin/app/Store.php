<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
    'location_name',
    'name',
    'contact',
    'email',
    'address',
    'workinghour',
    'type',
    'latitude',
    'longitude',
    'status'
  ];
}
