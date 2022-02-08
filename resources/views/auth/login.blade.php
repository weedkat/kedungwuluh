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

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{ url('login-form-20/css/style.css') }}" />
</head>

<body class="bg img js-fullheight" style="background-image: url(images/hero-bg.jpg); background: cover;">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 10%">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center"><img src="{{ url('images/logo_banyumas.png') }}" alt=""
                                style="max-height: 40px"> KEDUNGWULUH</h3>
                        <form method="POST" action="{{route('login')}}" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input id="email" name="email" type="text" class="form-control" placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password"
                                    required />
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-get-started submit px-3">
                                    Sign In
                                </button>
                            </div>
                            <p class="text-center"><a href="#" style="color: #fff">Forgot Password</a></p>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </section>

    <script src="{{ url('login-form-20/js/jquery.min.js') }}"></script>
    <script src="{{ url('login-form-20/js/popper.js') }}"></script>
    <script src="{{ url('login-form-20/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('login-form-20/js/main.js') }}"></script>
</body>

</html>
