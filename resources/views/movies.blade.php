@extends('layouts.base')

@section('contents')
    <h2>Ecco la lista dei film:</h2>

    <div class="row g-3 row-cols-3">
        @foreach ($arrMovies as $movie)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                  <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                  <p class="card-text">Data di Uscita: {{ $movie->date }}</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
        @endforeach
    </div>
@endsection