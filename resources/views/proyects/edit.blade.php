@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')
<form action="{{route('updateProyect', $proyect->id)}}" method="post">
@csrf
  <span>Name: </span><input type="text" name="name"value="{{$proyect->name}}"><br>
  <span>Title: </span><input type="text" name="title"value="{{$proyect->title}}"><br>
  <span>Start Date: </span><input type="date" name="startDate"value="{{$proyect->startDate}}"><br>
  <span>End Date: </span><input type="date" name="endDate"value="{{$proyect->endDate}}"><br>
  <span>Stimated Hours: </span><input type="text" name="StimatedHours"value="{{$proyect->StimatedHours}}"><br>
  <span>Employee: </span><input type="text" name="employee"value="{{$proyect->employee->id}}"><br>
  <input type="submit" value="Edit">
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
