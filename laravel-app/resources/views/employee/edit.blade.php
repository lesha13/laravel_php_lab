@extends('layoutsOld.employees')
@section('content')
    <h1>Edit employee</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{URL::to('employees') .'/' . $employee->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <label>Name: <input name="name" type="text" value="{{old('name', $employee->name)}}"></label>
        <br>
        <label>Position: <input name="position" type="text" value="{{old('position', $employee->position)}}"></label>
        <br>
        <label>Salary: <input name="salary" type="number" value="{{old('salary', $employee->salary)}}"></label>
        <br>
        <label>Experience: <input name="experience" type="number" value="{{old('experience', $employee->experience)}}"></label>
        <br>
        <label>Department id: <input name="department_id" type="number" value="{{old('department_id', $employee->department_id)}}"></label>
        <br>
        <button type="submit">
            Edit
        </button>
    </form>
@endsection
