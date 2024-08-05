<div>
    <div class="d-flex align-items-center gap-2 mb-5">
        <a wire:navigate href="{{ route('admin.slider.index') }}" class="btn btn-light">
            <i class="bx bx-chevron-left"></i>
        </a>
        <h2 class="text-dark fw-semibold mb-0">Tambah Slider</h2>
    </div>

    <div class="card border-0">
        <div class="card-body">
            <form wire:submit="save">
                <div class="mb-3">
                    <label class="form-label">Gambar Slider</label>
                    <label for="image" class="file">
                        <i class="bx bx-image-add fs-1 text-primary"></i>
                    </label>
                    <input type="file" accept="image/*" wire:model="image" id="image" class="d-none">
                </div>

                <button class="btn btn-primary" type="submit">
                    Simpan Baru
                </button>
            </form>
        </div>
    </div>
</div>
