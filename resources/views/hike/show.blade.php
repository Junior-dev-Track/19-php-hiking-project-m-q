@extends('base')

@section('title', $hike->title)

@section('content')
<div class="container mt-4">
  <h1>{{ $hike->title }}</h1>
  <h2>{{ $hike->duration }} min - {{ $hike->distance }} km</h2>
  <img src="/img/hikes/{{ $hike->title }}.jpg" alt="{{ $hike->title }}">

  <hr>

  <div class="mt-4">
    <p>{!! nl2br($hike->description) !!}</p>
    <div class="row">
      <div class="col-8">
        <h2>Caractéristiques</h2>
        <table class="table table-striped">
          <tr>
            <td>Distance</td>
            <td>{{ $hike->distance }} km</td>
          </tr>
          <tr>
            <td>Durée</td>
            <td>{{ $hike->duration }} min</td>
          </tr>
          <tr>
            <td>Dénivelé</td>
            <td>{{ $hike->elevation_gain }} m</td>
          </tr>
          <tr>
            <td>Localisation</td>
            <td>
              {{ $hike->city }} ({{ $hike->country }})
            </td>
          </tr>
        </table>
      </div>
      <div class="col-4">
        <h2>Specificités</h2>
        <ul class="list-group">
          @foreach($hike->options as $option)
            <li class="list-group-item">{{ $option->name }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>

  <div class="mt-4">
    <h4>Envie de plus de renseignements sur cette rando?</h4>

    @include('shared.flash')

    <form action="{{ route('hike.contact', $hike) }}" method="post" class="vstack gap-3">
      @csrf
      <div class="row">
        @include('shared.input', ['class' =>'col', 'name' => 'firstname', 'label' => 'Prenom'])
        @include('shared.input', ['class' =>'col', 'name' => 'lastname', 'label' => 'Nom'])
      </div>
      <div class="row">
        @include('shared.input', ['class' =>'col', 'name' => 'phone', 'label' => 'Telephone'])
        @include('shared.input', ['type' => 'email', 'class' =>'col', 'name' => 'email', 'label' => 'Email'])
      </div>
      @include('shared.input', ['type' => 'textarea', 'class' =>'col', 'name' => 'message', 'label' => 'Message'])
      <div>
        <button class="btn btn-primary">Soumettre</button>
      </div>
    </form>
  </div>

  </div>
@endsection