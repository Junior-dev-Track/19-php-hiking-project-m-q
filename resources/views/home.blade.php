@extends('base')

@section('content')

<div class="bg-light p-5 mb-5 text-center">
  <div class="container">
    <h1>Hiking Spirit</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati officia deleniti ea accusamus, quae beatae aliquid unde provident quos ipsa dolorum iure recusandae dolor laudantium!</p>
  </div>
</div>

<div class="container">
  <h2>Nos dernieres randos</h2>
  <div class="row">
    @foreach($properties as $property)
    <div class="col">
      @include('property.card')
    </div>
    @endforeach
  </div>
</div>

@endsection