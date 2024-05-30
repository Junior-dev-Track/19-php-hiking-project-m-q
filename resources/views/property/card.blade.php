<div class="card">
  <div class="card-body">
    <h5 class="card-title">
      <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>
    </h5>
    <p class="card-text">{{ $property->distance }}km - {{ $property->city }} ({{ $property->country }})</p>

  </div>
</div>