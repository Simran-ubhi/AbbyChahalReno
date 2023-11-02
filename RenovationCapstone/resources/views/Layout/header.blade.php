<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/style.css">
    <script src="/script.js"></script>
    <title>Abby Chahal Rennovations</title>
</head>
<body>
    <header>

        <a href="/"><img src="/LOGO2.jpg" class="header-logo" width="300px" alt="Abby Chahal Renovation"></a>
        {{-- <div style="width: 100px"> --}}

                <div class="menu-toggle">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/our-portfolio">Our Portfolio</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                    <hr>
                    @if(session('LoggedAdmin') || session('LoggedEmployee') ||session('LoggedUser'))
                    <div class="user-options">
                            <ul class="user-option--menu">
                                @if(session('LoggedAdmin'))
                                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                @endif
                                    <li><a href="{{route('profile')}}">Profile</a></li>
                                @if(session('LoggedAdmin') || session('LoggedEmployee'))
                                    <li><a href="{{route('estimator')}}">Estimator</a></li>
                                @endif
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        @else
                        <div class="user-options">
                            <a href="{{route('loginForm')}}">Login</a> | <a href="{{route('registerForm')}}">Register</a>
                        </div>
                    </div>
                    @endif
                    </ul>
                </nav>


            {{-- </div> --}}


        </header>
