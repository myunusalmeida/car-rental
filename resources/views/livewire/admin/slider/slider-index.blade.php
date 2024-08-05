<div>
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h2 class="text-dark fw-semibold">Slider</h2>
        <a wire:navigate href="{{ route('admin.slider.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i> Tambah Slider
        </a>
    </div>

    <div class="row row-cols-1 row-cols-lg-4 g-4">
        @foreach ($sliders as $item)
            <div class="col">
                <img src="{{ url('storage/' . $item->image) }}" alt="" class="rounded">
                <button class="btn btn-light mt-2" type="button" wire:click="destroy({{ $item->id }})">
                    Hapus
                </button>
            </div>
        @endforeach
    </div>
</div>
