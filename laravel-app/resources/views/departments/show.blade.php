@extends('layouts.employees')

@section('content')
    <h1>Department employees</h1>

    @forelse($employees as $employee)
        <div class="m-2 border-2 border-black">
            <h3>
                <a href="{{URL::to('employees') . '/' . $employee->id}}" class="underline">
                    {{$employee->name}}
                </a>
            </h3>
            <p>Salary: {{$employee->salary}}</p>
            <p>Experience: {{$employee->experience}}</p>
            <p>Department: {{$employee->department_name}}</p>
        </div>
    @empty
        <p>
            No employees
        </p>
    @endforelse

@endsection
