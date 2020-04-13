@extends('layouts.auth')

@section('content')
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#eb0040" fill-opacity="1" d="M0,128L40,133.3C80,139,160,149,240,144C320,139,400,117,480,101.3C560,85,640,75,720,74.7C800,75,880,85,960,128C1040,171,1120,245,1200,266.7C1280,288,1360,256,1400,240L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
  </svg>
<div class="content">
    <div class="login-form">
        <form method="POST" action="{{ route('register') }}" class="flex-center form">
            @csrf
            <div class="header">
                <h1 class="heading">Register</h1>
                <p>Already a member? <a href="{{route('login')}}">Sign In</a></p>
            </div>
            <div class="form-group row">
                <div class="col-md-6 text-center">
                    <input placeholder="{{ __('Name') }}" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <br>
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-6 text-center">
                    <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <br>
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <input placeholder="{{ __('Confirm Password') }}" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                    
                </div>
            </div>
            <div class="w-100">
                <a href="/"><i class="fas fa-long-arrow-alt-left"></i></a>
            </div>
        </form>
    </div>
</div>
@endsection