@extends('layouts.master')

@section('title', 'Create pict')

@section('content')
  <h1>Lets make a pict!</h1>

  <form method="POST" action="{{ route('picts.store') }}">
    @csrf

    <label for="question">Question</label>
    <input
      required
      id="question"
      type="text"
      name="question"
      value="{{ old('question') }}"
    />

    <label for="answer">Answer</label>
    <input
      required
      id="answer"
      type="text"
      name="answer"
      value="{{ old('answer') }}"
    />

    <input
      type="submit"
      value="create"
    />
  </form>

  @foreach($errors->all() as $error )
    {{ $error }}
  @endforeach
@endsection
