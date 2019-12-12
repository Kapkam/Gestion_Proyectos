@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col"></th>
      <th scope="col"><a class="text-warning" href="#">ADD Proyect</a></th>
    </tr>
  </thead>
  <tbody>
    @if (count($departments)>0)
      @foreach($departments as $department)
        <tr>
          <td>{{$department->id}}</td>
          <td>{{$department->name}}</td>
          <td><a class="text-info" href="#">Edit</a></td>
          <td><a class="text-info" href="#">Delete</a></td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>

@endsection
