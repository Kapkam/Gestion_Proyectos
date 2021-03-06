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
Route::get('/employees/{id}', 'EmployeeController@show')->name('show3');
Route::get('/proyects/responsable/{id}', 'ProyectController@responsable')->name('proyectName');
Route::get('/employees/proyect/{id}', 'ProyectController@show')->name('show1');
Route::get('/proyect/create', 'ProyectController@showCreate')->name('showCreate');
Route::get('/proyect/edit/{id}', 'ProyectController@showEdit')->name('showEdit');
Route::get('/proyects/{id}', 'ProyectController@delete')->name('deleteProyect');
Route::post('/proyect/stored', 'ProyectController@store')->name('storeProyect');
Route::post('/proyect/updated/{id}', 'ProyectController@update')->name('updateProyect');
// Route::get('/proyects/employees/{id}','EmployeeController@responsable')->name('responsable');
Route::get('/departments', 'DepartmentsCrontroller@index')->name('departments');
Route::get('/departments/{id}/employees', 'DepartmentsCrontroller@showEmployees')->name('showEmployees');
Route::get('/employees/department/{id}', 'DepartmentsCrontroller@show')->name('show4');
