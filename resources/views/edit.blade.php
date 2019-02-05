@extends('layout')

@section('content')

<h1 class="title">Edit Project</h1>

  <form>
    <div class="field">
      <label class="label" for="title">Title</label>
        <div class="control">
          <input type="text" class="input" name="title" value="{{ $test->project }}">
        </div>
      </div>
      <div class="field">
        <label class="label" for="beschrijving"></label>
          <div class="control">
            <textarea class="textarea">{{ $test->beschrijving }}</textarea>
          </div>
        </div>
        <div class="field">
            <div class="control">
              <button type="submit" class="button is-link">update</button>
            </div>
          </div>
      </form>

@endsection
