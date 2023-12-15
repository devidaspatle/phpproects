<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
    'type_menu',
    'categoryid',
    'subcategory',
    'image',
    'status'
  ];
}
