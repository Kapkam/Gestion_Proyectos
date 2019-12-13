<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProyectModel;
use App\EmployeeModel;
use App\Http\Requests\Test;
class ProyectController extends Controller
{
  public function index(){
    $proyects = ProyectModel::all();
    return view('proyects/index')->with('proyects',$proyects);
  }
  public function showCreate(){
  $employees=EmployeeModel::all();
  return view('proyects/create')->with('employees',$employees);
  }
  public function showEdit($id){
  $proyect = ProyectModel::find($id);
  $employees=EmployeeModel::all();
  return view('proyects/edit')->with('proyect',$proyect)->with('employees',$employees);
  }
  public function update(Request $request){
    $validate=$request->route();
    $proyect=ProyectModel::find($request->id);
    $proyect->name=$request->name;
    $proyect->title=$request->title;
    $proyect->startDate=$request->startDate;
    $proyect->endDate=$request->endDate;
    $proyect->StimatedHours=$request->StimatedHours;
    $proyect->employee_id=$request->employee;
    $proyect->save();
    return redirect(route('proyects'));
  }

  public function show($id)
  {
    $proyect = ProyectModel::find($id);
    return view('proyects/show', ['proyect' => $proyect] );
  }
  public function responsable($id){
    $proyect = ProyectModel::find($id);
    $responsable = $proyect->employee;
    return view('employees/show', ['employee' => $responsable ] );
  }
  public function store(Request $request){
    $validate=$request->route();
    $proyect=new ProyectModel();
    $proyect->name=$request->name;
    $proyect->title=$request->title;
    $proyect->startDate=$request->startDate;
    $proyect->endDate=$request->endDate;
    $proyect->StimatedHours=$request->StimatedHours;
    $proyect->employee_id=$request->employee;
    $proyect->save();
    return redirect(route('proyects'));
  }
  public function delete($id){
    $proyect= ProyectModel::find($id);
    $proyect->delete();
    return redirect(route('proyects'));
  }

}
