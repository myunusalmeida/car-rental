<div>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4">Pilih tanggal booking</h5>
                            <form wire:submit="search">
                                <div class="row align-items-end g-3">
                                    <div class="col-6 col-lg-5">
                                        <label for="from_date">Dari Tanggal</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                                            <input wire:model="start_date" type="date" id="from_date"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-5">
                                        <label for="to_date">Sampai Tanggal</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                                            <input wire:model="end_date" type="date" id="to_date"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <button type="submit" class="btn btn-primary w-100">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-2">
        <div class="container">
            <div class="row">
                @foreach ($sliders as $slider)
                    <div class="col-lg-6">
                        <img src="{{ url('storage/' . $slider->image) }}" alt="" class="rounded-3">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h3 class="fw-semibold mb-3 mb-lg-5">Katalog</h3>
            <div class="row row-cols-2 row-cols-lg-4 g-4">
                @foreach ($cars as $item)
                    <div class="col">
                        <a href="#" role="button" data-bs-toggle="modal"
                            data-bs-target="#bookCar{{ $item->id }}" class="card card-product">
                            <img src="{{ url('storage/' . $item->image) }}" class="card-img-top rounded-top-4"
                                alt="{{ $item->model }}">
                            <div class="card-body p-3 p-lg-4">
                                <h5 class="text-dark fw-semibold mb-3">{{ $item->brand . ' ' . $item->model }}</h5>
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/seat.png" style="width: 16px;" alt="Seat">
                                            <span class="fs-7">{{ $item->seats }} seats</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/money.png" style="width: 16px;" alt="Seat">
                                            <span class="fs-7">Rp. {{ number_format($item->price) }}/hari</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="modal fade" id="bookCar{{ $item->id }}">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Book {{ $item->brand . ' ' . $item->model }}</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="text-dark mb-4">Informasi Mobil</h5>
                                    <table class="table mb-5">
                                        <tr>
                                            <td>Brand</td>
                                            <td>{{ $item->brand }}</td>
                                        </tr>
                                        <tr>
                                            <td>Model</td>
                                            <td>{{ $item->model }}</td>
                                        </tr>
                                        <tr>
                                            <td>Warna</td>
                                            <td>{{ $item->color }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Pembuatan</td>
                                            <td>{{ $item->production_year }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kapasitas Penumpang</td>
                                            <td>{{ $item->seats }} seats</td>
                                        </tr>
                                        <tr>
                                            <td>Harga perhari</td>
                                            <td>Rp. {{ number_format($item->price) }}/hari</td>
                                        </tr>
                                    </table>
                                    <h5 class="text-dark mb-4">Informasi Booking</h5>
                                    <table class="table mb-5">
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td>
                                                {{ Auth::user() ? Auth::user()->name : 'Silahkan login terlebih dahulu' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Email</td>
                                            <td>
                                                {{ Auth::user() ? Auth::user()->email : 'Silahkan login terlebih dahulu' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mulai Booking</td>
                                            <td>{{ $start_date != '' ? $start_date : 'Isi tanggal terlebih dahulu' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Akhir Booking</td>
                                            <td>{{ $end_date != '' ? $end_date : 'Isi tanggal terlebih dahulu' }}</td>
                                        </tr>
                                    </table>
                                    @if (Auth::user())
                                        @if ($start_date != '' && $end_date != '')
                                            <button class="btn btn-primary py-2 fw-bold" type="button"
                                                wire:click="booking({{ $item->id }})">
                                                Booking Sekarang
                                            </button>
                                        @else
                                            <p class="mb-0 text-center text-danger">
                                                Silahkan isi tanggal mulai dan tanggal dikembalikan
                                            </p>
                                        @endif
                                    @else
                                        <p class="mb-0 text-center text-danger">Kamu harus login terlebih dahulu sebelum
                                            booking</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <script>
        var swiper = new Swiper(".banner-swiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script> --}}
</div>
