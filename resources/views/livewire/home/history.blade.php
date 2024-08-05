<section class="container py-5">
    <h4 class="mb-4">Histori Booking Kamu</h4>

    @if ($histories->count() > 0)
        <div class="card border-0">
            <div class="card-body p-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Booking</th>
                            <th>Mobil</th>
                            <th>Warna</th>
                            <th>Tahun Pembuatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Total Biaya</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($histories as $item)
                            <tr>
                                <td>#{{ $item->id }}</td>
                                <td>{{ $item->car->brand . ' ' . $item->car->model }}</td>
                                <td>{{ $item->car->color }}</td>
                                <td>{{ $item->car->production_year }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->end_date }}</td>
                                <td>Rp {{ number_format($item->total_price, 0, ',', '.') }}</td>
                                <td>{{ $item->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <p class="mb-0 text-secondary">Kamu belum memiliki histori booking</p>
    @endif
</section>
