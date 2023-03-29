@extends('layouts.app')

@section('title', 'Laravel')

@section('header')
    <nav class="underline bg-gray-500 p-2">
        <a href="{{URL::to('employees')}}">
            Home
        </a>
    </nav>
@endsection

@section('footer')
    2023
@endsection
