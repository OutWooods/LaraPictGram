@extends('layouts.master')

@section('title', 'create pict')

@section('content')
    <h1>Lets make a pict!</h1>

    <form method="POST" action="/picts">
         @csrf
        <label for="question">Question</label>
        <input name="question" type="text" id="question">
        <label for="answer">Answer</label>
        <input name="answer" type="text" id="answer">
        <input type="submit" value="create">
    </form>
@endsection
