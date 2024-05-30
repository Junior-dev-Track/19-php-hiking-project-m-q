<div class="card">
  <div class="card-body">
    <h5 class="card-title">
      <a href="{{ route('hike.show', ['slug' => $hike->getSlug(), 'hike' => $hike]) }}">{{ $hike->title }}</a>
    </h5>
    <p class="card-text">{{ $hike->distance }}km - {{ $hike->city }} ({{ $hike->country }})</p>
  </div>
</div>