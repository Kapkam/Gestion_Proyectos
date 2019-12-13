<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectModel extends Model
{
  protected $table='proyects';
  protected $fillable=['id','proyect_id','name','title','startDate','endDate','StimatedHours'];

  public function employee()
{
    return $this->belongsTo('App\EmployeeModel');
}


}
