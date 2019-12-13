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
    $employees = EmployeeModel::all();
    $employee = EmployeeModel::find($id);
    // $department = DepartmentsModel::where('id',$employee->department)->get();
    $department = DepartmentsModel::find($id);
    return view('employees/index', ['department' => $department,'employees' => $employees] );
  }
}
