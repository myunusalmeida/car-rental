<div>
    <h2 class="text-dark fw-semibold mb-5">Pelanggan</h2>

    <div class="card border-0">
        <div class="card-body">
            @if ($customers->count() > 0)
                <div class="card border-0">
                    <div class="card-body p-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID Customer</th>
                                    <th>Nama</th>
                                    <th>Alamat Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $item)
                                    <tr class="align-middle">
                                        <td>#{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <button class="btn btn-light" type="button"
                                                wire:click="delete({{ $item->id }})">
                                                <i class="bx bx-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <p class="mb-0 text-secondary">Belum ada customer</p>
            @endif
        </div>
    </div>
</div>
