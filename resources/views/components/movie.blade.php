<div class="col">
    <div class="card shadow-sm">
      <img src="{{ $movie->image_url }}" >
      <div class="card-body">
        <h5><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
          </div>
          <p>{{ $movie->storyline }}</p>
        </div>
      </div>
    </div>
  </div>