@extends('layout.default')

@section('content')
    <div class="container" style="max-width: 500px; margin: 0 auto;">
        @if ($movie)
            <div class="card">
                <img src="{{ $movie->image_url }}" class="card-img-top movie-image" alt="{{ $movie->title }}" style="max-width: 100%; height: auto;">
                <div class="card-body">
                    <h1>{{ $movie->title }}</h1>
                    <p>Genre: <a href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a></p>
                    <p><b>Director: </b>{{ $movie->director }}</p>
                    <p><b>Year of release: </b>{{ $movie->year }}</p>
                    <p><b>Plot: </b>{{ $movie->storyline }}</p>
                </div>
            </div>

            @include('components.createcomment')
            @include('components.comments')
        @else
            <p>Post not found.</p>
        @endif
    </div>
@endsection

