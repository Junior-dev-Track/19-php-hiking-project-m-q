<div class="card">
  <div class="card-body">
    <h5 class="card-title">
      <a class="text-success" href="{{ route('hike.show', ['slug' => $hike->getSlug(), 'hike' => $hike]) }}">{{ $hike->title }}</a>
    </h5>
    <img src="/img/hikes/{{ $hike->title }}.jpg" style="max-width: 100%;"" class="img-fluid rounded mx-auto d-block" alt="{{ $hike->title }}">
    <hr>
    <p class="card-text">{{ $hike->distance }}km - {{ $hike->city }} ({{ $hike->country }})</p>
  </div>
</div>