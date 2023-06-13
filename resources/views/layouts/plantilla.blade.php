<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
  <div class="contenedor d-flex flex-column align-items-center min-vh-100">
    <!-- Barra de navegación -->
    <nav class="container-fluid navbar navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">ILoveBooks</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto py-4 py-lg-0">
            <li class="nav-item mx-3"><a class="nav-link active" href="{{route('biblioteca.index')}}">Biblioteca</a></li>
            <li class="nav-item mx-3"><a class="nav-link active" href="{{route('perfil')}}">Perfil</a></li>
            <li class="nav-item mx-3"><a class="nav-link active" href="{{route('logout')}}">Cerrar sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Contenido -->
    @yield('content')

    <!-- Pie de página -->
    <footer class="container-fluid text-center bg-light p-0 m-0 position-absolute bottom-0 start-50 translate-middle-x">
      <div class="media container-fluid d-flex justify-content-center py-5">
        <a href="https://www.facebook.com" target="_blank">
            <img src="../public/imgs/facebook.svg" alt="Facebook">
        </a>
        <a href="https://www.instagram.com" target="_blank">
            <img src="../public/imgs/instagram.svg" alt="Instagram">
        </a>
        <a href="https://www.twitter.com" target="_blank">
            <img src="../public/imgs/twitter.svg" alt="Twitter">
        </a>
      </div>    
    
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright
      </div>
    </footer>
  </div>
</body>
</html>