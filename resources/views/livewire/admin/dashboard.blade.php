<div>
    <h2 class="text-dark fw-semibold mb-5">Selamat Datang Kembali, Admin 👋</h2>
    <div class="row g-3 mb-5">
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bxs-car fs-1 text-primary"></i>
                    <p class="mb-1 mt-2 text-secondary">Jumlah Mobil</p>
                    <h3 class="mb-0 text-dark fw-semibold">{{ number_format($cars) }} Mobil</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bxs-user fs-1 text-primary"></i>
                    <p class="mb-1 mt-2 text-secondary">Jumlah Customer</p>
                    <h3 class="mb-0 text-dark fw-semibold">{{ number_format($customers) }} Customer</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bx-calendar fs-1 text-primary"></i>
                    <p class="mb-1 mt-2 text-secondary">Jumlah Booking</p>
                    <h3 class="mb-0 text-dark fw-semibold">{{ number_format($booking_count) }} Booking</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bx-money-withdraw fs-1 text-primary"></i>
                    <p class="mb-1 mt-2 text-secondary">Total Pendapatan</p>
                    <h3 class="mb-0 text-dark fw-semibold">Rp. {{ number_format($booking_income) }}</h3>
                </div>
            </div>
        </div>
    </div>

    <h4 class="text-dark fw-medium mb-3">Booking Ongoing</h4>
    <div class="card border-0 rounded-3">
        <div class="card-body p-4">
            @if ($booking->count() > 0)
                <div class="card border-0">
                    <div class="card-body p-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID Booking</th>
                                    <th>Informasi Pelanggan</th>
                                    <th>Mobil</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Total Biaya</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking as $item)
                                    <tr class="align-middle">
                                        <td>#{{ $item->id }}</td>
                                        <td>
                                            {{ $item->user->name }} <br>
                                            <span class="fs-7">{{ $item->user->email }}</span>
                                        </td>
                                        <td>{{ $item->car->brand . ' ' . $item->car->model }}</td>
                                        <td>{{ $item->start_date }}</td>
                                        <td>{{ $item->end_date }}</td>
                                        <td>Rp {{ number_format($item->total_price, 0, ',', '.') }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <div class="dropdown">
                                                    <button class="btn btn-light border dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Ganti Status
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" role="button"
                                                                wire:click="change_status({{ $item->id }}, 'Confirmed')">
                                                                Confirmed
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" role="button"
                                                                wire:click="change_status({{ $item->id }}, 'In Progress')">
                                                                In Progress
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" role="button"
                                                                wire:click="change_status({{ $item->id }}, 'Completed')">
                                                                Completed
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" role="button"
                                                                wire:click="change_status({{ $item->id }}, 'Cancelled')">
                                                                Cancelled
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" role="button"
                                                                wire:click="change_status({{ $item->id }}, 'Failed')">
                                                                Failed
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <button class="btn btn-light" type="button"
                                                    wire:click="delete({{ $item->id }})">
                                                    <i class="bx bx-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <p class="mb-0 text-secondary">Belum ada booking</p>
            @endif
        </div>
    </div>
</div>
