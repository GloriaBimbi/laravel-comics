@extends('layout.app')

@section('main')
<div class="container">
  <h1>COMICS...</h1>
  <div class="card-container  d-flex justify-content-between align-items-center flex-wrap gap-5">
    @foreach($comics as $comic)
    <div class="card" style="width: 18rem;">
      <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="comic thumb">
      <div class="card-body">
        <h5 class="card-title">{{$comic['title']}}</h5>
        <p class="card-text">{{ $comic['description'] }}</p>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection

@section('title', 'Comics')
