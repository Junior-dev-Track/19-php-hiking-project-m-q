<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>@yield('title') | HikingSpirit</title>
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
            <a href="{{ route('hike.index') }}" @class(['nav-link', 'active' => str_contains($route, 'hike.')])>Randos</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('about.index') }}" @class(['nav-link', 'active' => str_contains($route, 'about.')])>About</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.hike.index') }}" @class(['nav-link', 'active' => str_contains($route, 'admin.hike.')])>Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

@yield('content')

<nav class="navbar bg-success bg-gradient mt-auto">
  <div class="container-fluid">
    <span class="navbar-text mx-auto" style="color: #e3f2fd;">
      © Copyright 2024 | HikingSpirit
    </span>
  </div>
</nav>

</body>
</html>