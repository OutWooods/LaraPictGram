@extends('layouts.master')

@section('title', 'picts')

@section('content')
    <h1>See all the marvelous picts!</h1>
    @foreach($picts as $pict)
        <p>{{ $pict->question }}</p>
        <a href="/picts/{{ $pict->id }}">See answer</a>
    @endforeach
@endsection
