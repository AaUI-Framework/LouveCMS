@extends('admin.layouts.login')

@section('content')

    <div class="parent-center">
        <div class="login-content">
            <div class="logo mb-4">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>

            <h2 class="h1">Entrar</h2>

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <label for="email" class="mb-0" >{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <label for="password" class="mt-3 mb-0" >{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <button type="submit" class="mt-4 btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
        </div>
    </div>
@endsection
