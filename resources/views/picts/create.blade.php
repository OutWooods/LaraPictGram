@extends('layouts.master')

@section('title', 'Create pict')

@section('content')
    <h1>Lets make a pict!</h1>

    <form method="POST" action="{{ route('picts.store') }}">
        @csrf

        <label for="question">Question</label>
        <input id="question"
               type="text"
               ame="question">

        <label for="answer">Answer</label>
        <input id="answer"
               type="text"
               name="answer">

        <input type="submit"
               value="create">
    </form>
@endsection
