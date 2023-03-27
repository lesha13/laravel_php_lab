@extends('layouts.employees')

@section('content')

    <h1> Show employee </h1>
    <h3> {{$employee->name}}</h3>
    <p>{{$employee->position}}</p>

@endsection
