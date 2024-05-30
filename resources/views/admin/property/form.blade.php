@extends('admin.admin')

@section('title', $property->exists ? 'Editer une rando' : 'Creer une rando')

@section('content')

<h1>@yield('title')</h1>

<form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', ['property' => $property]) }}" method="post">

@csrf
@method($property->exists ? 'put' : 'post')

<div class="row">
  @include('shared.input', ['class' =>'col', 'label' => 'Titre', 'name' => 'title', 'value' => $property->title])
  <div class="col row">
    @include('shared.input', ['class' =>'col', 'name' => 'distance', 'value' => $property->distance])
  </div>
</div>
@include('shared.input', ['type' => 'textarea', 'name' => 'description', 'value' => $property->description])
<div class="row">
  @include('shared.input', ['class' =>'col', 'name' => 'duration', 'label' => 'Durée', 'value' => $property->duration])
  @include('shared.input', ['class' =>'col', 'name' => 'elevation_gain', 'label' => 'Dénivelé', 'value' => $property->elevation_gain])
</div>
<div class="row">
  @include('shared.input', ['class' =>'col', 'name' => 'country', 'label' => 'Pays', 'value' => $property->country])
  @include('shared.input', ['class' =>'col', 'name' => 'city', 'label' => 'Ville', 'value' => $property->city])
</div>
@include('shared.select', ['name' => 'options', 'label' => 'Options', 'value' => $property->options()->pluck('id'),'multiple' => true])

<div>
  <button class="btn btn-primary">
      @if($property->exists)
        Editer
      @else
        Creer
      @endif
  </button>
</div>

</form>
    
@endsection