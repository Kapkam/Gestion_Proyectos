<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeModel;
class EmployeeController extends Controller
{
  public function index(){
    $employees = EmployeeModel::all();
    return view('employee/index')->with('employees',$employees);
  }
}
