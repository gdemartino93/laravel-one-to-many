@extends('layouts.main-layout')
@section('contents')
    <h2>Person:</h2>
    <ul>

        @foreach ($people as $person)

        @foreach ($posts as $post)
            
        @endforeach
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
                    Post:
                    <li class="fw-style">
                        <span>Title:</span>
                        <span class="fw-bold">{{$post -> title}}</span>
                    </li>
                    <li>
                        <p>{{$post -> body}}</p>
                    </li>
                 </ul>
            </li>


        @endforeach
    </ul>
@endsection