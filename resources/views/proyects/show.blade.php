@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

@if ($proyect)
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


@endsection
