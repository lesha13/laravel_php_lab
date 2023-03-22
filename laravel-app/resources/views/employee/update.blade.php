@extends('layouts.employees')
@section('content')
    <p>
        Post {{$employee->name}} was updated
    </p>

    <p>
        <a href="{{URL::to('employees')}}"> Return </a> to employees list
    </p>
@endsection
