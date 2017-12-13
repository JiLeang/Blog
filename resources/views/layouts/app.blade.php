<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="#" alt="MyBlog"/>
                    </a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Discuss</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Share</a>
                </div> 
            <div class="navbar-end">
                @if(!Auth::guest())
                    <a href="#" class="navbar-item is-tab">Login</a>
                    <a href="#" class="navbar-item is-tab">Join the Community</a>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link ">
                        Name</a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Notification
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Setting
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>Logout
                        </a>
                    </div>
                @endif
                    </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
