<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentsModel extends Model
{
  protected $table='departments';
  protected $fillable=['id','name'];
}
