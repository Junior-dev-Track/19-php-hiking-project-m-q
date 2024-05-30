@extends('admin.admin')

@section('title', $hike->exists ? 'Editer une rando' : 'Creer une rando')

@section('content')

<h1>@yield('title')</h1>

<form class="vstack gap-2" action="{{ route($hike->exists ? 'admin.hike.update' : 'admin.hike.store', ['hike' => $hike]) }}" method="post">

@csrf
@method($hike->exists ? 'put' : 'post')

<div class="row">
  @include('shared.input', ['class' =>'col', 'label' => 'Titre', 'name' => 'title', 'value' => $hike->title])
  <div class="col row">
    @include('shared.input', ['class' =>'col', 'name' => 'distance', 'value' => $hike->distance])
  </div>
</div>
@include('shared.input', ['type' => 'textarea', 'name' => 'description', 'value' => $hike->description])
<div class="row">
  @include('shared.input', ['class' =>'col', 'name' => 'duration', 'label' => 'Durée', 'value' => $hike->duration])
  @include('shared.input', ['class' =>'col', 'name' => 'elevation_gain', 'label' => 'Dénivelé', 'value' => $hike->elevation_gain])
</div>
<div class="row">
  @include('shared.input', ['class' =>'col', 'name' => 'country', 'label' => 'Pays', 'value' => $hike->country])
  @include('shared.input', ['class' =>'col', 'name' => 'city', 'label' => 'Ville', 'value' => $hike->city])
</div>
@include('shared.select', ['name' => 'options', 'label' => 'Options', 'value' => $hike->options()->pluck('id'),'multiple' => true])

<div>
  <button class="btn btn-primary">
      @if($hike->exists)
        Editer
      @else
        Creer
      @endif
  </button>
</div>

</form>
    
@endsection