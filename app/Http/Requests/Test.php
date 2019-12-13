<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Test extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
          'name'=>'required',
          'title'=>'required',
          'startDate'=>'required|date|before:fechafin',
          'endDate'=>'required|date|after:fechainicio',
          'StimatedHours'=>'required|min:0',
          'employee'=>'required'
      ];
    }

    public function messages(){
     return $messages=[
         'name.required'=>'Please enter a name',
         'title.required'=>'Please enter a title',
         'startDate.required'=>'Please enter a startDate',
         'endDate.required'=>'Please enter a endDate',
         'StimatedHours.required'=>'Please enter a StimatedHours',
         'employee.required'=>'Please select an employee'
     ];
 }
}
