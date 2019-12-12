<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
  protected $table='employees';
  protected $fillable=['id','name','surname','email','telephone'];
}
