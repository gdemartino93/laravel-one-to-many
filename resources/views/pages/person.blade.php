@extends('layouts.main-layout')
@section('contents')
    <ul>
        @foreach ($people as $person)
            <li>
                {{$person -> personDetail -> phone}}
            </li>
        @endforeach
    </ul>
@endsection