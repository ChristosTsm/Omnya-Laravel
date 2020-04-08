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
                --link-color: #3490dc;
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

            .m-b-md {
                margin-bottom: 30px;
            }

            .login-form {
                display: flex;
                flex-direction: row;
            }
            .login-img {
                background-image: url('https://images.pexels.com/photos/669619/pexels-photo-669619.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                width: 50vw;
                height: 100vh;
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
        <div class="content">
            <div class="login-form">
                <div class="login-img"></div>
                <form method="POST" action="{{ route('login') }}" class="flex-center form">
                    @csrf
                    <div class="header">
                        <h1 class="heading">Welcome</h1>
                        <p>New to OMNYA? <a href="{{route('register')}}">Sign Up</a></p>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
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
