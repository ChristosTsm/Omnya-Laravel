{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Omnya - Business Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700&display=swap" rel="stylesheet">
       <!-- Styles -->
        <style>
            :root {
                --link-color: #eb0040;
            }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Quicksand', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .text-center {
                text-align: center;
            }

            .login-form {
                display: flex;
                flex-direction: column;
                transform: translateY(-50%);
            }
            .form {
                display: flex;
                flex-direction: column;
                margin: 0 auto;
            }
            .heading {
                font-weight: 300;
                text-align: center;
            }
            input {
                padding: 10px 100px 10px 15px;
                margin: 10px 0;
            }
            a {
                text-decoration: none;
                font-weight: 700;
                color: var(--link-color);
            }
            .btn {
                /* display: block; */
                padding: 5px 35px;
                margin: 0 auto;
                background-color: var(--link-color);
                color: #fff;
                outline: none;
                border: none;
                cursor: pointer;
                margin: 10px 0 15px;
                transition: 250ms;
            }
            .btn:hover {
                transform: scale(1.2);
            }
            .pass-forgot {
                font-weight: 300;
                font-size: 0.8rem;
            }
        </style>
    </head>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eb0040" fill-opacity="1" d="M0,96L40,96C80,96,160,96,240,101.3C320,107,400,117,480,106.7C560,96,640,64,720,48C800,32,880,32,960,48C1040,64,1120,96,1200,96C1280,96,1360,64,1400,48L1440,32L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
        <div class="content">
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}" class="flex-center form">
                    @csrf
                    <div class="header">
                        <h1 class="heading">Welcome</h1>
                        <p>New to OMNYA? <a href="{{route('register')}}">Sign Up</a></p>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 text-center">
                            <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <br>
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 text-center">
                            <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <br>
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4 text-center">
                            <button type="submit" class="btn">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="pass-forgot" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
