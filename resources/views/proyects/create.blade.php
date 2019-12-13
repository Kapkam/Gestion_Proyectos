@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
<form action="{{route('storeProyect')}}" method="post">
@csrf
  <span>Name: </span><input type="text" name="name" id="" ><br>
  <span>Title: </span><input type="text" name="title" id="" ><br>
  <span>Start Date: </span><input type="date" name="startDate" id="" ><br>
  <span>End Date: </span><input type="date" name="endDate" id="" ><br>
  <span>Stimated Hours: </span><input type="text" name="StimatedHours" id="" ><br>
  <span>Employee</span><select name="employee" id="">
  @if(count($employees)>0)
  @foreach($employees as $employee)
  <option value="{{$employee->id}}">{{$employee->name}}</option>
  @endforeach
  @endif
  </select><br>
  <input type="submit" value="Insert">
</form>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
