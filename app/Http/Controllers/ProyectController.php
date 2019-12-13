<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProyectModel;
use App\EmployeeModel;
class ProyectController extends Controller
{
  public function index(){
    $proyects = ProyectModel::all();
    return view('proyects/index')->with('proyects',$proyects);
  }
  public function update($id){
    $proyect=ProyectModel::find($id);
    $employee=EmployeeModel::all();
    return view('proyects/edit')->with('proyect',$proyect)->with('employees',$employee);
  }
  public function show($id)
  {
    $proyect = ProyectModel::find($id);
    return view('proyects/show', ['proyect' => $proyect] );
  }

}
