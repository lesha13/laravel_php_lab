@extends('layouts.app')

@section('title', 'Laravel')

@section('header')
    <p>Logo</p>
    <nav>
        <ul>
            <li>
                <a href="{{URL::to('employees')}}">
                    Home
                </a>
            </li>
{{--            <li>--}}
{{--                <a href="{{route('about')}}">--}}
{{--                    About--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
    </nav>
@endsection

@section('footer')
    2023
@endsection
