@extends('layouts.main')

@section('container')

    @foreach ($posts as $about)
        <h2>{{ $about["title"]}} </h2>
        <h5>{{ $about["author"]}}</h5>
        <p>{{ $about["body"]}}</p>
    @endforeach

@endsection
