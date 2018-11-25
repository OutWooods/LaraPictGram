@extends('layouts.master')

@section('title', 'edit pict')

@section('content')
    <h1>Edit a pict</h1>
    <form action="/picts/{{$pict->id}}" method="POST">
        @method('PATCH')
        @csrf

        <label for="question">Edit question</label>
        <input name="question" id="question" value={{$pict->question}}>
        <label for="answer">Edit answer</label>
        <input name="answer" id="answer" value={{$pict->answer}}>
        <input type="submit" value="save" >
    </form>
@endsection
