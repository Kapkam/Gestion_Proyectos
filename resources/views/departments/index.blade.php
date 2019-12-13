@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<table class="table">
  <thead class="thead-dark  text-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
    </tr>
  </thead>
  <tbody>
    @if (count($departments)>0)
      @foreach($departments as $department)
        <tr>
          <td>{{$department->id}}</td>
          <td>{{$department->name}}</td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>

@endsection
