@extends('layouts.employees')
@section('content')
    <p>
        Employee {{$employee->name}} was deleted
    </p>

    <p>
        <a href="{{URL::to('employees')}}"> Return </a> to employees list
    </p>
@endsection
