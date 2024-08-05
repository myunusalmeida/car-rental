<div>
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h2 class="text-dark fw-semibold">Daftar Mobil</h2>
        <a wire:navigate href="{{ route('admin.daftar-mobil.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i>Tambah Mobil
        </a>
    </div>

    <div class="card border-0">
        <div class="card-body">
            @if ($cars->count() > 0)
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Merek</th>
                                <th>Model</th>
                                <th>Warna</th>
                                <th>Tahun Pembuatan</th>
                                <th>Kapasitas Penumpang</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $item)
                                <tr class="align-middle">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ url('storage/' . $item->image) }}" alt="Mobil 1"
                                            class="rounded-md" style="width: 80px;">
                                    </td>
                                    <td>{{ $item->brand }}</td>
                                    <td>{{ $item->model }}</td>
                                    <td>{{ $item->color }}</td>
                                    <td>{{ $item->production_year }}</td>
                                    <td>{{ $item->seats }} Kursi</td>
                                    <td>Rp. {{ number_format($item->price) }}/hari</td>
                                    <td>
                                        @if ($item->status == 'Available')
                                            <span class="badge bg-success">{{ $item->status }}</span>
                                        @else
                                            <span class="badge bg-primary">{{ $item->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light rounded-circle p-2" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                style="width: 40px; height: 40px;">
                                                <i class="bx bx-dots-horizontal"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a wire:navigate class="dropdown-item"
                                                        href="{{ route('admin.daftar-mobil.edit', $item->id) }}">
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"
                                                        wire:confirm="Kamu yakin akan menghapus data ini?"
                                                        wire:click="delete({{ $item->id }})">
                                                        Hapus
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="mb-0 text-center text-danger">Tidak ada mobil</p>
            @endif
        </div>
    </div>
</div>
