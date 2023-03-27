{{--@extends('layouts.employees')--}}

{{--@section('content')--}}
{{--    <h1>Employees</h1>--}}


{{--    <a href="{{URL::to('employees') . '/create'}}"> Create new employee </a>--}}
{{--    @forelse($employees as $employee)--}}
{{--        <article>--}}
{{--            <h3>--}}
{{--                <a href="{{URL::to('employees') . '/' . $employee->id}}">--}}
{{--                    {{$employee->name}}--}}
{{--                </a>--}}
{{--            </h3>--}}
{{--            <a href="{{URL::to('employees') . '/' . $employee->id . '/edit'}}">--}}
{{--                Edit--}}
{{--            </a>--}}
{{--            <form action="{{URL::to('employees') . '/' . $employee->id}}" method="post">--}}
{{--                @csrf--}}
{{--                <input type="hidden" name="_method" value="DELETE">--}}
{{--                <button type="submit"> Delete</button>--}}
{{--            </form>--}}
{{--            <p>Salary: {{$employee->salary}}</p>--}}
{{--            <p>Experience: {{$employee->experience}}</p>--}}
{{--        </article>--}}
{{--    @empty--}}
{{--        <p>--}}
{{--            No employees--}}
{{--        </p>--}}
{{--    @endforelse--}}
{{--    --}}
{{--    --}}
{{--    --}}
{{--@endsection--}}


@extends('layouts.employees')

@section('content')
    <h1>Employees</h1>


    <a href="{{URL::to('employees') . '/create'}}"> Create new employee </a>
    @forelse($employees as $employee)
        <article>
            <h3>
                <a href="{{URL::to('employees') . '/' . $employee->id}}">
                    {{$employee->name}}
                </a>
            </h3>
            <a href="{{URL::to('employees') . '/' . $employee->id . '/edit'}}">
                Edit
            </a>
            <form action="{{URL::to('employees') . '/' . $employee->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit"> Delete</button>
            </form>
            <p>Salary: {{$employee->salary}}</p>
            <p>Experience: {{$employee->experience}}</p>
        </article>
    @empty
        <p>
            No employees
        </p>
    @endforelse

    <h2>Departments</h2>

    @forelse($departments as $department)
        <article>
            <h3>
                <a href="{{URL::to('departments') . '/' . $department->id}}">
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
