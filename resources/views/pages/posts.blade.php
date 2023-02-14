@extends('layouts.main-layout')
@section('title')
    <title>Post</title>
@endsection

@section('contents')


    <ul>
        @foreach ($posts as $post)
        <img src={{$post -> person -> personDetail -> avatar}} alt="">
            <li>
                <h5 class="fw-bold">{{$post -> title}}</h5>
                <p>{{ $post -> body}}</p> 
            </li>
            <div>
                <span>Scritto da :</span>
                <span class="fw-bold">{{$post -> person -> name}}</span><br>
                <ul>
                    <li>
                        <span>Telephone Number: </span>
                        <span>{{$post -> person -> personDetail -> phone}}</span><br>
                    </li>
                    <li>
                        <span>Address: </span>
                        <span>{{$post -> person -> personDetail -> address}}</span><br>
                    </li>
                </ul>
            </div>

            
         @endforeach

    </ul>

@endsection