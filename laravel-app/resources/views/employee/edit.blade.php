@extends('layouts.employees')
@section('content')
    <h1>Edit employee</h1>

    <form action="{{URL::to('employees') .'/' . $employee->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <label>Name: <input name="name" type="text" value="{{$employee->name}}"></label>
        <br>
        <label>Position: <input name="position" type="text" value="{{$employee->position}}"></label>
        <br>
        <label>Salary: <input name="salary" type="number" value="{{$employee->salary}}"></label>
        <br>
        <label>Experience: <input name="experience" type="number" value="{{$employee->experience}}"></label>
        <br>
        <label>Department id: <input name="department_id" type="number" value="{{$employee->department_id}}"></label>
        <br>
        <button type="submit">
            Edit
        </button>
    </form>
@endsection
