<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepartmentsModel;
use App\EmployeeModel;
class DepartmentsCrontroller extends Controller
{
  public function index(){
    $departments = DepartmentsModel::all();
    return view('departments/index')->with('departments',$departments);
  }

  public function showEmployees($id)
  {
    $department = DepartmentsModel::find($id);
    $employees = EmployeeModel::where('department_id',$id)->get();
    return view('departments/show', ['employees' => $employees, 'department' => $department] );
  }

  public function show($id)
  {
    $employee = EmployeeModel::find($id);
    return view('employees/show', ['employee' => $employee] );
  }
}
