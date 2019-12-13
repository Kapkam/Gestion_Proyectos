@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

@if ($department)
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Departrment</th>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td></td>
          <td>{{$department->id}}</td>
          <td>{{$department->name}}</td>
        </tr>
    </tbody>
  </table>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Employees</th>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          @foreach($employees as $employee)
          <td></td>
            <td>{{$employee->id}}</td>
            <td><a href="{{route('show3', $employee->id)}}">{{$employee->name}}INFO</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endif

@endsection
