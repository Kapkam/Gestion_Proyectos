<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})-> name('home');

Route::get('/proyects', 'ProyectController@index')->name('proyects');
Route::get('/employees', 'EmployeeController@index')->name('employees');
Route::get('/employees/proyect/{id}', 'ProyectController@show')->name('proyectName');
Route::get('/proyects/employees/{id}','EmployeeController@responsable')->name('responsable');
Route::get('/departments', 'DepartmentsCrontroller@index')->name('departments');
