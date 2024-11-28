<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="shortcut icon" href="{{asset('images/tcc.ico')}}" type="image/x-icon">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary fixed-top" style="padding:0;">
            <div class="container-fluid" style="background-color: rgb(0, 0, 50); position:0;">
                <a class="navbar-brand" href="{{route('home')}}" style="padding-bottom: 0.5rem; padding-left: 1rem;">
                    <img src="{{asset('images/logotcc.webp')}}" alt="Logo Portal TCC" width="100" height="50">
                </a>

                @yield('search')
                
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="background-color: #00a8be; border: var(--bs-border-width) solid rgb(0, 168, 190);">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: rgb(0,0,40); color: white;">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item" style="color: white;">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}" style="color: white;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('documents.catalog')}}" style="color: white;">Catálogo</a>
                        </li>
                        <li class="nav-item dropdown">
                            @auth
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                            Autores
                            </a>
                            <ul class="dropdown-menu" style="background-color: rgb(0,0,60); --bs-dropdown-link-hover-bg: rgb(0,0,90);">
                            <li><a class="dropdown-item" href="#" style="color: white;">Upload TCC</a></li>
                            <li><a class="dropdown-item" href="#" style="color: white;">Minha Conta</a></li>
                            </ul>
                            @endauth
                            @guest
                            <p class="d-flex justify-content-left align-items-center">
                                <span class="me-3">Cadastre-se gratuitamente</span>
                                <a class="btn btn-outline-light btn-rounded" href="{{route('auth.login.view')}}" role="button">Sign up!</a>
                            </p>
                            @endguest
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main style="display:flex; justify-content:center; position:relative; padding: 1rem; padding-top: 6rem; padding-bottom: 5rem; height: 100vh;">
        @yield('content')
    </main>
        
    <footer class="text-center text-white fixed-bottom" style="background-color: rgb(0, 0, 40); width: 100vw">
        <div class="text-center p-3" style="background-color: rgb(0, 0, 20); height: 6vh; align-items:center; padding-bottom: 1rem;">
            &copy; 2024 - Copyright: 
            <a class="text-white" href="{{route('home')}}">Portal TCC</a>
        </div>
    </footer>
</body>
</html>