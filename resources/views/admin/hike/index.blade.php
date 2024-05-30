@extends('admin.admin')

@section('title', 'Toutes les randos')

@section('content')

<div class="d-flex justify-content-between align-items-center">
  <h1>@yield('title')</h1>
  <a href="{{ route('admin.hike.create') }}" class="btn btn-primary">Ajouter une rando</a>
</div>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Titre</th>
        <th>distance</th>
        <th>Ville</th>
        <th class="text-end">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($hikes as $hike)
          <tr>
            <td>{{ $hike->title }}</td>
            <td>{{ $hike->distance }} km</td>
            <td>{{ $hike->city }}</td>
            <td>
              <div class="d-flex gap-2 w-100 justify-content-end">
                <a href="{{ route('admin.hike.edit', $hike) }}" class="btn btn-primary">Modifier</a>
                <form action="{{ route('admin.hike.destroy', $hike) }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
              </div>
            </td>
          </tr>
      @endforeach
    </tbody>
        
  </table>

  {{ $hikes->links() }}

@endsection