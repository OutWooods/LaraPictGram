@extends('layouts.master')

@section('title', 'edit pict')

@section('content')
    <h1>Edit a pict</h1>
    <form method="POST"
          action="{{ route('picts.update', $pict->id) }}">
        @method('PATCH')
        @csrf

        <label for="question">Edit question</label>
        <input id="question"
               name="question"
               value={{$pict->question}}>

        <label for="answer">Edit answer</label>
        <input id="answer"
               name="answer"
               value={{$pict->answer}}>

        <input type="submit" value="save">
    </form>
@endsection
