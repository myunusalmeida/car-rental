@extends('layouts.app')

@section('content')
    <a href="{{ route('google.redirect') }}" class="btn btn-light bg-white border w-100 mb-5">
        <img src="{{ url('assets/images/google-logo.png') }}" alt="Google Logo" style="width: 30px">
        Login with Google
    </a>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="mb-1">Alamat Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="mb-1">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="btn btn-primary d-block w-100" type="submit">Masuk</button>
        <p class="mb-0 mt-2 text-secondary text-center">
            Belum Memiliki Akun? <a wire:navigate href="{{ route('register') }}"
                class="text-decoration-underline text-primary">Daftar</a>
        </p>
    </form>
@endsection
