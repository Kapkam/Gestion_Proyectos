@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<table class="table">
  <thead class="thead-dark  text-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">SURNAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TELEPHONE</th>
      <th scope="col">RESPONSABLE OF</th>
      <th scope="col">DEPARTMENT</th>
    </tr>
  </thead>
  <tbody>
    @if (count($employees)>0)
      @foreach($employees as $employee)
        <tr>
          <td>{{$employee->id}}</td>
          <td>{{$employee->name}}</td>
          <td>{{$employee->surname}}</td>
          <td>{{$employee->email}}</td>
          <td>{{$employee->telephone}}</td>
          <td><a class="text-danger" href="{{route('show1', $employee->id)}}">Show Proyect Name</a></td>
          <td><a class="text-danger" href="{{route('show4', $employee->id)}}">Show Department</a></td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>
@if ($proyect ?? '')
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>{{$proyect->id}}</td>
          <td>{{$proyect->name}}</td>
        </tr>
    </tbody>
  </table>
@endif
@if ($department ?? '')
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>{{$department->id}}</td>
          <td>{{$department->name}}</td>
        </tr>
    </tbody>
  </table>
@endif


@endsection
