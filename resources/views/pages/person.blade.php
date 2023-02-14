@extends('layouts.main-layout')
@section('contents')
    <h2>Person:</h2>
    <ul>

        @foreach ($people as $person)

            <img src={{$person -> personDetail -> avatar}} alt="">
            <li>
                <h3 class="fw-bold">{{$person -> name}}</h3>
                <span>{{$person -> email}}</span><br>
            </li>
            <span class="fs-2">Person Detail:</span>
            <li>
                <span>{{$person -> personDetail -> phone}}</span><br>
                <span>{{$person -> personDetail -> address}}</span> 
                <ul>
                    <span>Post:</span>
                    @foreach ($person->post as $post)
                        <li class="fw-style">
                            <span>Title:</span>
                            <span class="fw-bold">{{$post -> title}}</span>
                        </li>
                        <li>
                            <p>{{$post -> body}}</p>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
