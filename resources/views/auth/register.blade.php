@extends('layouts.app')

@section('content')
    <a href="{{ route('google.redirect') }}" class="btn btn-light bg-white border w-100 mb-5">
        <img src="{{ url('assets/images/google-logo.png') }}" alt="Google Logo" style="width: 30px">
        Register with Google
    </a>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="mb-1">{{ __('Nama Lengkap') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="mb-1">{{ __('Alamat Email') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="mb-1">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password-confirm" class="mb-1">{{ __('Konfirmasi Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-2">
            {{ __('Daftar') }}
        </button>
        <p class="text-secondary text-center">
            Sudah memiliki akun? <a wire:navigate href="{{ route('login') }}"
                class="text-decoration-underline text-primary">Login</a>
        </p>
    </form>
@endsection
