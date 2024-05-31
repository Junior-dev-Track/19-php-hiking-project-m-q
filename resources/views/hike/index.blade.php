@extends('base')


@section('title', 'Toutes les randos')

@section('content')

<div class="bg-light p-5 mb-5 text-center">
  <form action="" method="get" class="container d-flex gap-2">
    <input type="number" placeholder="Distance min" class="form-control" name="distance" value="{{ $input['distance'] ?? '' }}">
    <input placeholder="Durée de la rando" class="form-control" name="duration" value="{{ $input['duration'] ?? '' }}">
    <input placeholder="Mot clef" class="form-control" name="title" value="{{ $input['title'] ?? '' }}">
    <button class="btn btn-success btn-sm flex-grow-0">Rechercher</button>
  </form>
</div>

  <div class="container">
    <div class="row">
    @forelse($hikes as $hike)
      <div class="col-3 mb-4">
        @include('hike.card')
      </div>
      @empty
      <div class="col">
        Aucune rando ne correspond à la recherche
      </div>
    @endforelse
    </div>
    <div class="my-4">
      {{ $hikes->links() }}
    </div>
  </div>

@endsection