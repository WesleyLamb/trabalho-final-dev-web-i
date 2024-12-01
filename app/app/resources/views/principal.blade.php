<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="{{asset('images/tcc.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div class="d-flex flex-column">
        <header>
            <nav class="navbar bg-body-tertiary p-0">
                <div class="container-fluid">
                    <a class="navbar-brand pb-2 pl-3" href="{{route('home')}}">
                        <img class="img-logo" src="{{asset('images/logotcc.webp')}}" alt="Logo Portal TCC">
                    </a>
                    @auth
                    <div class="d-flex text-white align-middle">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Logado como: <strong>{{auth()->user()->name}}</strong>
                            </a>

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('api.v1.auth.logout')}}">Sair</a></li>
                            </ul>
                          </div>
                    </div>
                    @endif
                </div>
            </nav>
        </header>

        <main class="container" style="display:flex; justify-content:center; position:relative; padding: 1rem; padding-top: 6rem; padding-bottom: 5rem; min-height: 100vh">
            @yield('content')
        </main>

        <footer class="d-flex flex-row justify-content-center text-center text-white" style="background-color: rgb(0, 0, 40); width: 100vw">
            <div class="text-center p-3" style="height: 6vh; align-items:center; padding-bottom: 1rem;">
                &copy; 2024 - Copyright:
                <a class="text-white" href="{{route('home')}}">Portal TCC</a>
            </div>
            <div class="text-center p-3" style="height: 6vh; align-items:center; padding-bottom: 1rem;">
                <a class="text-white" href="{{route('auth.login.view')}}">Acesso Restrito</a>
            </div>
        </footer>
    </div>
</body>
@yield('innerJS')
</html>