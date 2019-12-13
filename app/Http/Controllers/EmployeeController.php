<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProyectModel;
use App\EmployeeModel;
class EmployeeController extends Controller
{
  public function index(){
    $employees = EmployeeModel::all();
    return view('employees/index')->with('employees',$employees);
  }
  public function responsable($id){
    $proyects = ProyectModel::all();
    $employee=EmployeeModel::find($id);
    return view('proyects/index', ['proyects' => $proyects,'employee' => $employee] );
  }
  public function show($id)
  {
    $employee = EmployeeModel::find($id);
    return view('employees/show', ['employee' => $employee] );
  }
}
