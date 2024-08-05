<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('components.header')
</head>

<body class="bg-soft-blue">
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container">
            <a wire:navigate href="{{ route('home') }}" class="navbar-brand logo">
                <img src="{{ url('assets/images/logo.png') }}" alt="Logo"> Car Rental
            </a>
            <button id="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a wire:navigate class="dropdown-item" href="{{ route('history') }}">
                                        Histori Booking
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                        Keluar
                                    </a>
                                    <form action="{{ route('logout') }}" method="POST" class="d-none" id="logout-form">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a wire:navigate href="{{ route('register') }}" class="btn">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a wire:navigate href="{{ route('login') }}" class="btn btn-primary">Masuk</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <footer class="py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                <p class="mb-0 fs-7 text-secondary">
                    &copy; 2024 Onlenkan Academy <br>
                    A division of Onlenkan
                </p>
                <a href="https://onlenkan.com" class="mb-0 fs-7 link">
                    Onlenkan / About
                </a>
            </div>
        </div>
    </footer>

    @include('components.script')
</body>

</html>
