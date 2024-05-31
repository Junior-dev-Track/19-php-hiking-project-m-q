<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
  <title>@yield('title') | Administration</title>
  <style>
    @layer reset{
      button {
        all: unset;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-success bg-gradient navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">HikingSpirit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @php
        $route = request()->route()->getName();
      @endphp
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ route('admin.hike.index') }}" @class(['nav-link', 'active' => str_contains($route, 'hike.')])>Gerer les randos</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.option.index') }}" @class(['nav-link', 'active' => str_contains($route, 'option.')])">Gerer les options</a>
          </li>
        </ul>
        <div class="ms-auto">
          @auth
            <ul class="navbar-nav">
              <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  @method('delete')
                  <button class="nav-link">Se deconnecter</button>
                </form>
              </li>
            </ul>
          @endauth
        </div>
      </div>
    </div>
  </nav>

  <div class="container mt-5">

    @include('shared.flash')

    @yield('content')
  </div>

  <script>
    new TomSelect('select[multiple]', {plugins: {remove_button: {title: 'Supprimer'}}});
  </script>

<nav class="navbar bg-success bg-gradient mt-auto">
  <div class="container-fluid">
    <span class="navbar-text mx-auto" style="color: #e3f2fd;">
      © Copyright 2024 | HikingSpirit
    </span>
  </div>
</nav>

</body>
</html>