@extends('layouts.master')

@section('title', 'Edit pict')

@section('content')
  <h1>Edit a pict</h1>

  <form method="POST"
        action="{{ route('picts.update', $pict->id) }}">
    @method('PATCH')
    @csrf

    <label for="question">Edit question</label>
    <input
      required
      id="question"
      name="question"
      value={{$pict->question}}
    />

    <label for="answer">Edit answer</label>
    <input
      required
      id="answer"
      name="answer"
      value={{$pict->answer}}
    />

    <input
      value="save"
      type="submit"
    />
  </form>
@endsection
