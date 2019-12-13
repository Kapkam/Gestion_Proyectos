<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeModel;
use App\DepartmentsModel;
class EmployeeController extends Controller
{
  public function index(){
    $employees = EmployeeModel::all();
    return view('employees/index')->with('employees',$employees);
  }

  public function show($id)
  {
    $employee = EmployeeModel::find($id);
    return view('employees/show', ['employee' => $employee] );
  }
}
