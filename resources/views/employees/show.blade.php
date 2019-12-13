@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

@if ($employee)
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>{{$employee->id}}</td>
          <td>{{$employee->name}}</td>
        </tr>
    </tbody>
  </table>
@endif


@endsection
