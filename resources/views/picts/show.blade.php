@extends('layouts.master')

@section('title', 'Pict view')

@section('content')
  <h1>Question: {{ $pict->question }}</h1>
  <p>Answer: {{ $pict->answer }}</p>

  @if($pict->hints->count())
    @foreach($pict->hints as $hint)
      <p>Hint: {{ $hint->description }}</p>
    @endforeach
  @endif

  <a href="{{ route('picts.edit', $pict->id) }}">Edit</a>
@endsection
