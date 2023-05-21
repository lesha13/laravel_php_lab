@extends('layoutsOld.employees')
@section('content')
    <h1>Create a new employee</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{URL::to('employees')}}" method="post">
        @csrf
        <label>Name: <input name="name" type="text" value="{{old('name')}}"></label>
        <br>
        <label>Position: <input name="position" type="text" value="{{old('position')}}"></label>
        <br>
        <label>Salary: <input name="salary" type="number" value="{{old('salary')}}"></label>
        <br>
        <label>Experience: <input name="experience" type="number" value="{{old('experience')}}"></label>
        <br>
        <label>Department id: <input name="department_id" type="number" value="{{old('department_id')}}"></label>
        <br>
        <button type="submit">
            Create
        </button>
    </form>
@endsection
