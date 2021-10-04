
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ciorna.css') }}" rel="stylesheet">
    <link rel = "stylesheet" href = "https://fontawesome.com/">
    <script src ="https://kit.fontawesome.com/1969c0f2e0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-green shadow-sm">
            <a style = "font-size:15px; margin-left:15px; color:white" onMouseOver="this.style.color='rgb(5, 4, 4)'" onMouseOut="this.style.color='#fff'"  class="navbar-brand" href="{{ url('/') }}"><i class="fas fa-home"></i>Acasa</a>
            <a style = "font-size:15px; margin-left:15px; color:white" onMouseOver="this.style.color='rgb(5, 4, 4)'" onMouseOut="this.style.color='#fff'" class="navbar-brand" href="{{ route('vacante.index') }}"><i class="fas fa-water"></i>Vacante</a>
            <a style = "font-size:15px; margin-left:15px; color:white" onMouseOver="this.style.color='rgb(5, 4, 4)'" onMouseOut="this.style.color='#fff'" class="navbar-brand" href="{{ route('vacante.create') }}"><i class="fas fa-folder-plus"></i>Creeaza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                <ol class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a style = "font-size:15px; margin-left:15px; color:white" onMouseOver="this.style.color='rgb(5, 4, 4)'" onMouseOut="this.style.color='#fff'" class="nav-link" href="{{ route('login') }}">{{ __('Contul meu') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a style = "font-size:15px; margin-left:15px; color:white" onMouseOver="this.style.color='rgb(5, 4, 4)'" onMouseOut="this.style.color='#fff'" class="nav-link" href="{{ route('register') }}">{{ __('Autentificare') }}</a>
                            </li>
                        @endif
                        @else   
                            <li style = "color:white; font-size:15px; margin-top:6px;" class="fas fa-user-circle"></i>{{ Auth::user()->name }}              
                            <li><a  class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form  id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>               
                            </li>
                    @endguest
                </ol>  
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>