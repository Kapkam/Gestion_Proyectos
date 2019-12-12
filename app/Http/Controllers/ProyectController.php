<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProyectModel;
class ProyectController extends Controller
{
  public function index(){
    $proyects = ProyectModel::all();
    return view('proyects/index')->with('proyects',$proyects);
  }
}
