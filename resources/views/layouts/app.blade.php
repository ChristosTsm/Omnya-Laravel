<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OMNYA | Business Management System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0e69954788.js" crossorigin="anonymous"></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body class="dashboard-bg">
    <div id="app"> 
        <div class="dashboard-menu">
            <div class="dashboard-header">
                <a href="/home">OMNYA</a><br>
                <span style="color:#fff; opacity:0.5;">Version 0.1.1</span>
            </div>
            <ul>
                <li class="dashboard-item" style="opacity: 0.5;">Main</li>
                <li class="dashboard-item"><a href="/employees"><img src="{{asset('assets/employees.svg')}}" class="fa-icon" alt="employees"> Employees</a></li>
                <li class="dashboard-item"><a href="#"><img src="{{asset('assets/calendar.svg')}}" class="fa-icon" alt="schedule"> Schedule</a></li>
                <li class="dashboard-item"><a href="/tasks"><img src="{{asset('assets/tasks.svg')}}" class="fa-icon" alt="tasks"> Tasks</a></li>
                {{-- <li class="dashboard-item"><a href="#"><i class="fas fa-chart-pie"></i> Charts</a></li>
                <li class="dashboard-item"><a href="#"><i class="fas fa-file-invoice"></i> Invoicing</a></li> --}}
                <li class="dashboard-item"><a href="/clients"><img src="{{asset('assets/clients.svg')}}" class="fa-icon" alt="clients"> Clients</a></li>
            </ul>
            <hr class="divisioner">
            <ul>
                <li class="dashboard-item" style="opacity: 0.5;">User</li>
                <li class="dashboard-item"><a href="#"><img src="{{asset('assets/profile.svg')}}" class="fa-icon" alt="profile"> Profile</a></li>
                <li class="dashboard-item"><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <img src="{{asset('assets/logout.svg')}}" class="fa-icon" alt="logout"> {{ __('Logout') }}
                </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>

        <main class="py-4 margin-left">
            <div class="d-flex justify-content-around container align-items-center pb-5">
                <div class="input-search">
                    <i class="fas fa-search"></i>
                    <input type="text" name="search" id="search" placeholder="Search">
                </div>
                <h5 class="username">{{Auth::user()->name}}</h5>
            </div>
                @yield('content')
        </main>
    </div>
</body>
</html>
