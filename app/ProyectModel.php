<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectModel extends Model
{
  protected $table='proyects';
  protected $fillable=['id','name','title','startDate','endDate','StimatedHours'];
}
