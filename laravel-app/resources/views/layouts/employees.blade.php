@extends('layouts.app')

@section('title', 'Laravel')

@section('header')
    <p>Logo</p>
    <nav>
        <a href="{{URL::to('employees')}}">
            Home
        </a>
    </nav>
@endsection

@section('footer')
    2023
@endsection
