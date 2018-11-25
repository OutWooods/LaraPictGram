@extends('layouts.master')

@section('title', 'picts')

@section('content')
    <h1>See all the marvelous picts!</h1>
    <h2>Or <a href="/picts/create">make</a> one yourself!</h2>
    @foreach($picts as $pict)
        <p>{{ $pict->question }}</p>
        <a href="/picts/{{ $pict->id }}">See answer</a>
        <a href="/picts/{{ $pict->id }}/edit">Edit pict</a>
        <form action="/picts/{{ $pict->id }}" method="POST">
            @method('DELETE')
            @csrf

            <input type="submit" value="Delete pict">
        </form>
    @endforeach
@endsection
