<div class="col-lg-2 bg-white min-h-screen py-3 px-2 px-lg-3 sidebar">
    <div class="d-flex align-items-center justify-content-between">
        <a wire:navigate href="{{ route('admin.dashboard') }}" class="logo fs-5">
            <img src="{{ url('assets/images/logo.png') }}" alt="logo">
            <span>Car Rental</span>
        </a>
        <button class="btn btn-light d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navMenu">
            <i class="bx bx-menu"></i>
        </button>
    </div>
    <hr class="my-4 d-none d-lg-block border-secondary">
    <div class="menus d-none d-lg-block">
        <p class="mb-2 text-secondary fw-semibold fs-7">Utama</p>
        <a wire:navigate href="{{ route('admin.dashboard') }}"
            class="link-menu btn {{ request()->is('admin') ? 'active' : '' }}">
            <i class="bx bxs-dashboard"></i> Dashboard
        </a>
        <a wire:navigate href="{{ route('admin.daftar-mobil.index') }}"
            class="link-menu btn {{ request()->is('admin/daftar-mobil*') ? 'active' : '' }}">
            <i class="bx bxs-car"></i> Daftar Mobil
        </a>
        <a wire:navigate href="{{ route('admin.slider.index') }}"
            class="link-menu btn {{ request()->is('admin/slider*') ? 'active' : '' }}">
            <i class='bx bx-slideshow'></i> Slider Banner
        </a>

        <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Booking</p>
        <a wire:navigate href="{{ route('admin.booking.index') }}"
            class="link-menu btn {{ request()->is('admin/booking*') ? 'active' : '' }}">
            <i class="bx bxs-calendar"></i> Booking
        </a>
        <a wire:navigate href="{{ route('admin.history.index') }}"
            class="link-menu btn {{ request()->is('admin/histori*') ? 'active' : '' }}">
            <i class="bx bx-history"></i> History
        </a>
        <a wire:navigate href="{{ route('admin.customer.index') }}"
            class="link-menu btn {{ request()->is('admin/pelanggan') ? 'active' : '' }}">
            <i class="bx bxs-user"></i> Customer
        </a>

        <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Pengaturan</p>
        <a href="#" class="link-menu btn">
            <i class="bx bx-cog"></i> Pengaturan
        </a>
        <a href="{{ route('logout') }}" class="link-menu btn"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
            <i class="bx bx-log-out"></i> Keluar
        </a>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="navMenu" aria-labelledby="navMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="navMenuLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="sidebar">
            <p class="mb-2 text-secondary fw-semibold fs-7">Utama</p>
            <a wire:navigate href="{{ route('admin.dashboard') }}"
                class="link-menu btn {{ request()->is('admin') ? 'active' : '' }}">
                <i class="bx bxs-dashboard"></i> Dashboard
            </a>
            <a wire:navigate href="{{ route('admin.daftar-mobil.index') }}"
                class="link-menu btn {{ request()->is('admin/daftar-mobil*') ? 'active' : '' }}">
                <i class="bx bxs-car"></i> Daftar Mobil
            </a>

            <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Booking</p>
            <a wire:navigate href="{{ route('admin.booking.index') }}"
                class="link-menu btn {{ request()->is('admin/booking*') ? 'active' : '' }}">
                <i class="bx bxs-calendar"></i> Booking
            </a>
            <a wire:navigate href="{{ route('admin.history.index') }}"
                class="link-menu btn {{ request()->is('admin/histori*') ? 'active' : '' }}">
                <i class="bx bx-history"></i> History
            </a>
            <a wire:navigate href="{{ route('admin.customer.index') }}"
                class="link-menu btn {{ request()->is('admin/pelanggan') ? 'active' : '' }}">
                <i class="bx bxs-user"></i> Customer
            </a>

            <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Pengaturan</p>
            <a href="#" class="link-menu btn">
                <i class="bx bx-cog"></i> Pengaturan
            </a>
            <a href="{{ route('logout') }}" class="link-menu btn"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <i class="bx bx-log-out"></i> Keluar
            </a>
        </div>
    </div>
</div>

<form action="{{ route('logout') }}" method="POST" class="d-none" id="logout-form">
    @csrf
</form>
