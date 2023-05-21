@extends('layoutsOld.employees')

@section('content')
    <h1>Employees</h1>

    <a href="{{URL::to('employees') . '/create'}}" class="underline"> Create new employee </a>
    <div class="max-w-[33%]">
    @forelse($employees as $employee)
        <div class="min-w-fit m-2 border-2 border-black flex justify-center items-center flex-col">
            <div class="flex">
                <a href="{{URL::to('employees') . '/' . $employee->id}}" class="underline p-2">
                    {{$employee->name}}
                </a>
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
    </div>
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
