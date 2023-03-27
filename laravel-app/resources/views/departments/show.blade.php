@extends('layouts.employees')

@section('content')
    <h1>Department employees</h1>

    @forelse($employees as $employee)
        <article>
            <h3>
                <a href="{{URL::to('employees') . '/' . $employee->id}}">
                    {{$employee->name}}
                </a>
            </h3>
            <p>Salary: {{$employee->salary}}</p>
            <p>Experience: {{$employee->experience}}</p>
            <p>Department: {{$employee->department_name}}</p>
        </article>
    @empty
        <p>
            No employees
        </p>
    @endforelse

@endsection
