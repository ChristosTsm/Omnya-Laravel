@extends('layouts.auth')

@section('content')
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
            <div class="w-100">
                <a href="/"><i class="fas fa-long-arrow-alt-left"></i></a>
            </div>
        </form>
    </div>
    
</div>
@endsection