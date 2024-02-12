<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/StylesUsuario.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">

    <header>
        <a  href="{{asset ('usuarios')}}" class="link-index">
            <img src="https://document-export.canva.com/hWuZ0/DAF7-fhWuZ0/4/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20240206%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20240206T014446Z&X-Amz-Expires=5456&X-Amz-Signature=13c7b2d3cb805b4df7bf59e845b40be27e61204487db22d6281c839ce5914d32&X-Amz-SignedHeaders=host&response-expires=Tue%2C%2006%20Feb%202024%2003%3A15%3A42%20GMT" alt="Logo">
        </a>
        <h1>SENA Sonríe</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              {{-- <a class="navbar-brand" href="#">Menu</a> --}}
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    {{-- @guest
                    <a class="nav-link active" aria-current="page" href="#"><b>Registrarme</b></a>
                    @endguest
                    @auth
                        <p>{{Auth::User()->Nombres}} {{Auth::user()->Apellidos}}</p>
                    @endauth --}}
                    {{-- @if () --}}
                    <a class="nav-link active" aria-current="page" href="#" style="cursor: default;">
                        <b>@yield('User')</b></a>
                    {{-- @else --}}
                        <a class="nav-link active" aria-current="page" href="{{route ('usuarios.create')}}"><b>Registrarme</b></a>
                    {{-- @endif --}}
                    <a class="nav-link " aria-current="page" href="#">Servicios</a>
                    <a class="nav-link " aria-current="page" href="#">Contactanos</a>
                </div>
              </div>
            </div>
          </nav>
    </header>

    @yield('bodys')

    <footer>
        <div class="footer-horizontal">
            <div class="footer-vertical">
                <h2>Nuestras Redes</h2>
                <span>Facebook</span>
                <span>X</span>
                <span>Instagram</span>
            </div>
            <div class="footer-vertical">
                <h2>Contacto Adicional</h2>
                <span>senasonrie@gmail.com</span>
                <span>01 8000 123 456</span>
            </div>
            <div class="footer-vertical">
                <h2>Ubicación</h2>
                <span>Mapa</span>
            </div>
        </div>
    </footer>

</body>
</html>