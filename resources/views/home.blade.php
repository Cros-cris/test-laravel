@extends('welcome')

@section('content')

  <div class="content">
      <div class="title m-b-md">
        Cristepher
      </div>

      <div class="links">
        <p>

        <a href = "/contact">contact</a>
        <a href = "/about">about me</a>
       </p>
      </div>
      <div>
        @foreach($tests as $test)
          <p>
            {{ $test->project }}

            {{ $test->beschrijving}}
          </p>
        @endforeach
      </div>
  </div>

@endsection
