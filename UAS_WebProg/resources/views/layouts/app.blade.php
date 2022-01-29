<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wonderful Journey</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class = "" style="background-color:rgb(220,220,220); 
                  padding-bottom: 2%">
    <p style="font-size: 75px; top: 20%; text-align: center;">Wonderful Journey</p>
    <h3 style= "font-size: 25px; text-align: center;">Blog of Indonesia Tourism</h3>
    </div>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm" style="margin-left: 20%;margin-right: 20%">
            <div class="container" style="color = white">
            <a class="navbar-brand" style="color: white" href="{{ url('/') }}">
                    Home
                </a>         
                            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                       @guest
                       <li class="nav-item dropdown" style="margin-bottom: 2%">
                                <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                                    Category
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li class="nav-link text-white">
                                        <a class="dropdown-item" href="{{url('category',1)}}">Beach</a>
                                        <a class="dropdown-item" href="{{url('category',2)}}">Mountain</a>
                                        <a class="dropdown-item" href="{{url('category',3)}}">Lake</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav=item" style="margin-bottom: 2%">
                                <a class="nav-link text-white" href="{{url ('/about')}}">About Us</a>
                            </li>

                       @else
                       
                           @if(auth()->user()->role =="user")
                           <li class="nav=item" style="margin-bottom: 2%">
                                <a class="nav-link text-white" href="{{url('/profile')}}">Profile</a>
                            </li>
                            <li class="nav=item" style="margin-bottom: 2%">
                                <a class="nav-link text-white" href="{{url('/blog')}}">Blog</a>
                            </li>

                           @endif

                            @if(auth()->user()->role =="admin")
                            <li class="nav=item" style="margin-bottom: 2%">
                                <a class="nav-link text-white" href="#">Admin</a>
                            </li>
                            <li class="nav=item" style="margin-bottom: 2%">
                                <a class="nav-link text-white" href="{{url ('/user')}}">User</a>
                            </li>
                             @endif
                            @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="color = white">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        @else


                            @if(auth()->user()->role == "user")
                            <li class="nav-item dropdown" style="color = white">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" style="color = white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                                @endif

                            @if(auth()->user()->role == "admin")
                                    <li class="nav-item dropdown" style="color = white" >
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" style="color = white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                            @endif

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


</body>
</html>
