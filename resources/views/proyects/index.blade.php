@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">TITLE</th>
      <th scope="col">STARTDATE</th>
      <th scope="col">ENDDATE</th>
      <th scope="col">STIMATEDHOURS</th>
    </tr>
  </thead>
  <tbody>
    @if (count($proyects)>0)
      @foreach($proyects as $proyect)
        <tr>
          <td>{{$proyect->id}}</td>
          <td>{{$proyect->name}}</td>
          <td>{{$proyect->title}}</td>
          <td>{{$proyect->startDate}}</td>
          <td>{{$proyect->endDate}}</td>
          <td>{{$proyect->StimatedHours}}</td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>

@endsection
