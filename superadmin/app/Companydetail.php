<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Companydetail extends Model
{
  protected $table = 'companydetails';
    protected $fillable = [
    'companyname',
    'logo',
    'keywords_data',
    'description'
  ];
}
