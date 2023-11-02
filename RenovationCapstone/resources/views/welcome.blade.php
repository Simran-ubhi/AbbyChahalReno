<!DOCTYPE html>
<html class="home-html" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="icon" type="image/x-icon" href="LOGO.jpg">
    <title>Abby Chahal Rennovations</title>
</head>
<body>
<section>
<header>

    <a href="/"><img class="header-logo" src="LOGO2.jpg" alt="Abby Chahal Renovation"></a>
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
                        {{-- <i class="user-options--btn"><img class="icon" src="user-icon.png" width="30px" alt="option"></i> --}}
                        <ul class="user-option--menu">
                            @if(session('LoggedAdmin'))
                                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                            @endif
                            @if (session('LoggedUser'))
                                <li><a href="{{route('profile')}}">Profile</a></li>
                            @endif
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
</section>

<main>
    <div class="home">
        <section class="hero-text">
            <div>
                <h1>New home <br> Same Memories.</h1>
                <p>Welcome to Abby Chahal Renovations. We make your house a home.</p>
            </div>

        </section>

        <section class="home-section-2">
                <h2 class="section-h">Our Services</h2>
                <p>We offer a wide range of renovation services to meet your needs.</p>
                <div class="home-services">
                    <ul>
                        <li>Tile Installation</li>
                        <li>Drywall Installation</li>
                        <li>Backsplash</li>
                        <li>Niche</li>
                        <li>Laminate</li>
                    </ul>
                </div>
                <a href="/our-portfolio">Checkout Our Portfolio!</a>
        </section>

        <section class="home-section-3">
                <h3 class="section-h">Contact Us</h3>
                <p>Get in touch with us for a free consultation and quote.</p>
                <a href="/contact-us">Get a Quote</a>
        </section>
    </div>
</main>

<section>
    <footer>

        <div class="footer--logo">
            <img src="lg3W.png" width="200px" loading="lazy" alt="Abby Chahal Renovations Logo">
            <div class="footer--social-media">
                <a href=""><img width="44px" src="facebook.png" alt="facebook"></a>
                <a href=""><img width="44px" src="instagram.png" alt="instagram"></a>
                <a href=""><img width="44px" src="tik-tok.png" alt="tik tok"></a>
            </div>
        </div>

        <div class="footer--links">

            <div>
                <h3>Services</h3>
                <hr>
                <p>Tile Installation</p>
                <p>Drywall Installation</p>
                <p>Backsplash</p>
                <p>Niche</p>
                <p>Laminate</p>
            </div>

            <div>
                <h3>Find Us</h3>
                <hr>
                <p>+1(647)300-1111</p>
                <p>abbychahal@gmail.com</p>
                <p>20 Some dr, Abbotsford, BC</p>
            </div>

        </div>
    </footer>
</section>
</body>
</html>

