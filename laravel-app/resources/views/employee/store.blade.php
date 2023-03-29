@extends('layouts.employees')
@section('content')
    <p>
        Employee {{$employee->name}} was stored
    </p>

    <p>
        <a href="{{URL::to('employees')}}" class="underline"> Return </a> to employees list
    </p>
@endsection
