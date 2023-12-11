
@extends('layouts.app')

@section('content')

<main class="bg-gray">
  <div class="container">
    <div class="row pt-5 text-center">
      @foreach ($comics as $comic)
        <div class="col-2">
          <div class="comics">
            <img class="img-comics" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }} thumbnail">
            <p>{{ $comic['series'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <div class="container pt-5 pb-5 text-center">
    <button>LOAD MORE</button>
  </div>
</main>
    
@endsection
