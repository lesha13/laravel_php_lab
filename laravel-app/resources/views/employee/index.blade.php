@extends('layouts.employees')

@section('content')
    <h1>Employees</h1>

    <a href="{{URL::to('employees') . '/create'}}" class="underline"> Create new employee </a>
    @forelse($employees as $employee)
        <div class="m-2 border-2 border-black">
            <div class="flex">
                <h3>
                    <a href="{{URL::to('employees') . '/' . $employee->id}}" class="underline p-2">
                        {{$employee->name}}
                    </a>
                </h3>
                <a href="{{URL::to('employees') . '/' . $employee->id . '/edit'}}" class="underline p-2">
                    Edit
                </a>
                <form action="{{URL::to('employees') . '/' . $employee->id}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="underline p-2"> Delete</button>
                </form>
            </div>
            <p>Salary: {{$employee->salary}}</p>
            <p>Experience: {{$employee->experience}}</p>
        </div>
    @empty
        <p>
            No employees
        </p>
    @endforelse

    <h2>Departments</h2>

    @forelse($departments as $department)
        <article>
            <h3>
                <a href="{{URL::to('departments') . '/' . $department->id}}" class="underline p-2">
                    {{$department->department_name}}
                </a>
            </h3>
        </article>
    @empty
        <p>
            No departments
        </p>
    @endforelse

@endsection
