@extends('layout')

@section('content')

<h1 class="title">Edit Project</h1>

  <form method="post" action="/test/{{ $test->id }}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="field">
      <label class="label" for="title">Title</label>
        <div class="control">
          <input type="text" class="input" name="project" value="{{ $test->project }}">
        </div>
      </div>
      <div class="field">
        <label class="label" for="beschrijving"></label>
          <div class="control">
            <textarea class="textarea" name='beschrijving'>{{ $test->beschrijving }}</textarea>
          </div>
        </div>
        <div class="field">
            <div class="control">
              <button type="submit" class="button is-link">update</button>
            </div>
          </div>
      </form>
      <div>
        <form method="post" action='/test/{{ $test->id }}'>
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <div>
            <button type='delete' data-id="{{ $test->id }}" class='deleteproject'>verwijderen</buttton>
        </div>
      </form>


@endsection
