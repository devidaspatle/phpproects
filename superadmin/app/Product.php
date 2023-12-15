<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
protected $fillable = ['type_menu', 'categoryid', 'subcategoryid', 'product_name', 'description', 'image', 'status'];

}
