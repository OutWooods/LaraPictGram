@extends('layouts.master')

@section('title', 'Picts')

@section('content')
    <h1>See all the marvelous picts!</h1>
    <h2>Or <a href="{{  route('picts.create') }}">make</a> one yourself!</h2>

    @foreach($picts as $pict)
        <p>{{ $pict->question }}</p>

        <a href="{{ route('picts.show', $pict->id) }}">See answer</a>
        <a href="{{ route('picts.edit', $pict->id) }}">Edit pict</a>

        <form action="{{ route('picts.destroy', $pict->id) }}" method="POST">
            @method('DELETE')
            @csrf

            <input type="submit" value="Delete pict">
        </form>
    @endforeach
@endsection
