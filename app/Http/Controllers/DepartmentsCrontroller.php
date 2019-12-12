<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepartmentsModel;
class DepartmentsCrontroller extends Controller
{
  public function index(){
    $departments = DepartmentsModel::all();
    return view('departments/index')->with('departments',$departments);
  }
}
