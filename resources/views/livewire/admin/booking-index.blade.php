<div>
    <h2 class="text-dark fw-semibold mb-5">Booking</h2>

    <div class="card border-0">
        <div class="card-body">
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
