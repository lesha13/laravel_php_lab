@extends('layouts.employees')
@section('content')
    <h1>Create a new employee</h1>

    <form action="{{URL::to('employees')}}" method="post">
        @csrf
        <label>Name: <input name="name" type="text"></label>
        <br>
        <label>Position: <input name="position" type="text"></label>
        <br>
        <label>Salary: <input name="salary" type="number"></label>
        <br>
        <label>Experience: <input name="experience" type="number"></label>
        <br>
        <label>Department id: <input name="department_id" type="number"></label>
        <br>
        <button type="submit">
            Create
        </button>
    </form>
@endsection
