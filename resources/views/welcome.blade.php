<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Omnya - Business Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700&display=swap" rel="stylesheet">
       <!-- Styles -->
       <link href="{{ asset('css/media.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/0e69954788.js" crossorigin="anonymous"></script>
    <body>
        <nav id="navbar">
            <div class="navlinks">
                <a href="/" id="logo"><span><i class="fas fa-rocket"></i></span> OMN<span>Y</span>A</a>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="navlinks">
                <ul>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <div> 
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a href="{{ route('home') }}">
                                    {{ __('Dashboard') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
        <header class="py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-6 header-img">
                      <img src="https://logobly.com/wp-content/uploads/logobly_hero_image_illustration_07.png" alt="Business Management">  
                    </div>
                    <div class="col-sm-6">
                        <div class="header-intro">
                            <h1>Managing your business has never been that easy</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque non expedita totam quaerat, neque autem quo, mollitia velit officia in dicta delectus quasi perferendis!</p>
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-4">
                        <span class="icon"><i class="far fa-calendar-alt"></i></span>
                        <h1>Arrange Meetings</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, commodi. Impedit, quos sint. Delectus, debitis.</p>
                    </div>
                    <div class="col-sm-4">
                        <span class="icon"><i class="fas fa-tasks"></i></span>
                        <h1>Manage Projects</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum in vitae saepe atque magni dolorem quo ratione dicta? Sapiente, explicabo.</p>
                    </div>
                    <div class="col-sm-4">
                        <span class="icon"><i class="fas fa-smile"></i></span>
                        <h1>Easy to use</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, aspernatur.</p>
                    </div>
                </div>
            </div>
        </main>
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-6">
                        <div class="header-intro">
                            <h1>Take full control of your business</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit eaque quia dolores omnis facere maiores quidem, odio, non laudantium voluptatibus adipisci placeat consequatur!</p>
                            <a href="/register" class="btn btn-primary">Sign Up</a>
                        </div>
                    </div>
                    <div class="col-sm-6 header-img text-center">
                        <img src="https://logobly.com/wp-content/uploads/logobly_hero_image_illustration_06.png" alt="Manage your business">
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 secondary-bg text-center">
            <div class="container secondary-bg-text">
                <h1>Built for makers, side hustlers and entrepreneurs</h1>
                <p>Running a small business isn't easy. You're constantly faced with admin and organisational challenges, not to mention the complications of managing your sales and accounts. Too many businesses fail because these complications suck away at your time, leaving you with little time to grow your company. We built OMNYA to take these challenges away from you, so you can focus on what you know best.</p>
            </div>
        </section>
        <section class="pb-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#eb0040" fill-opacity="1" d="M0,288L34.3,282.7C68.6,277,137,267,206,229.3C274.3,192,343,128,411,106.7C480,85,549,107,617,138.7C685.7,171,754,213,823,245.3C891.4,277,960,299,1029,288C1097.1,277,1166,235,1234,229.3C1302.9,224,1371,256,1406,272L1440,288L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
            </svg>
            <div class="text-center my-5">
              <h1>Want more?<br>Feel free to contact us, we are open to suggestions & improvement</h1>
              <a href="#">Contact Us</a>
            </div>
        </section>
        <footer class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <h1><a href="/">OMNYA B.M.S.</a></h1>
                    </div>
                    <div class="col-sm-4">
                        <h5>Product</h5>
                        <ul>
                            <li><a href="#">-CRM Software</a></li>
                            <li><a href="#">-Project Management Software</a></li>
                            <li><a href="#">-Knowledgebase</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="#">-About</a></li>
                            <li><a href="#">-Terms of use</a></li>
                            <li><a href="#">-Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            let navbar = document.getElementById('navbar');
            window.onscroll = () => {scrollFunction()};
            scrollFunction = () => {
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    navbar.classList.add('scrolled-nav');
                } else {
                    navbar.classList.remove('scrolled-nav');
                }
            }
        </script>
    </body>
</html>
