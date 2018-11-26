@extends('layouts.master')

@section('title', 'Pict view')

@section('content')
    <h1>Question: {{ $pict->question }}</h1>
    <p>Answer: {{ $pict->answer }}</p>
    <a href="{{ route('picts.edit', $pict->id) }}/edit">Edit</a>
@endsection
