<section class="container">
    <div class="row align-items-center justify-content-center" style="min-height: 100vh">
        <div class="col-lg-5">
            <div class="card border-0">
                <div class="card-body p-4">
                    <h2 class="text-center mb-2">Transaksi Berhasil</h2>
                    <p class="text-center text-secondary mb-4">
                        Silahkan ke tempat kami untuk mengambil mobilnya dan melakukan pembayaran
                    </p>

                    <table class="table mb-4">
                        <tr>
                            <td>Booking ID</td>
                            <td>#{{ $booking->id }}</td>
                        </tr>
                        <tr>
                            <td>Mobil</td>
                            <td>{{ $booking->car->brand . ' ' . $booking->car->model }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai</td>
                            <td>{{ $booking->start_date }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Selesai</td>
                            <td>{{ $booking->end_date }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{ $booking->status }}</td>
                        </tr>
                        <tr>
                            <td>Total Biaya</td>
                            <td>Rp {{ number_format($booking->total_price, 0, ',', '.') }}</td>
                        </tr>
                    </table>
                    <a wire:navigate href="{{ route('home') }}" class="btn btn-primary w-100">
                        Lihat Histori
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
