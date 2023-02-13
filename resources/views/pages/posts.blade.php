@extends('layouts.main-layout')
@section('title')
    <title>Post</title>
@endsection

@section('contents')

@foreach ($people as $person) 
{{-- <span>{{$person -> personDetail -> phone}}</span> --}}
@endforeach
    <ul>
        @foreach ($posts as $post)
        
            <li>
                <h5 class="fw-bold">{{$post -> title}}</h5>
                <p>{{ $post -> body}}</p> 
            </li>
            <div>
                <span>Scritto da :</span><br>
                <span class="fw-bold">{{$post -> person -> name}}</span><br>
                <ul>
                    <li>
                        <span>{{$person -> personDetail -> phone}}</span><br>
                     
                        <span>
                            <img src={{$person -> personDetail -> avatar}} alt="">
                        </span>
                    </li>
                </ul>
            </div>

            
         @endforeach

    </ul>

@endsection