<div>
    <div class="d-flex align-items-center gap-2 mb-5">
        <a wire:navigate href="{{ route('admin.daftar-mobil.index') }}" class="btn btn-light">
            <i class="bx bx-chevron-left"></i>
        </a>
        <h2 class="text-dark fw-semibold mb-0">Edit Mobil</h2>
    </div>

    <div class="card border-0">
        <div class="card-body">
            <form wire:submit="save">
                <div class="row g-3 mb-4">
                    <div class="col-lg-6">
                        <label for="merek" class="form-label">Merek</label>
                        <input type="text" wire:model="brand" id="merek" class="form-control" autofocus>
                    </div>
                    <div class="col-lg-6">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" wire:model="model" id="model" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="warna" class="form-label">Warna</label>
                        <input type="text" wire:model="color" id="warna" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="tahun" class="form-label">Tahun Pembuatan</label>
                        <input type="number" wire:model="production_year" id="tahun" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="kapasitas" class="form-label">Kapasitas Penumpang</label>
                        <input type="number" wire:model="seats" id="kapasitas" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" wire:model="price" id="harga" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="status" class="form-label">Status</label>
                        <select wire:model="status" id="status" class="form-select">
                            <option value="On Going">On Going</option>
                            <option value="Available">Available</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Foto Mobil</label>
                        <label for="photo" class="file">
                            <i class="bx bx-image-add fs-1 text-primary"></i>
                        </label>
                        <input type="file" wire:model="image" id="photo" class="d-none">
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
</div>
