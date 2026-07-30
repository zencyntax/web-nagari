<div class="card">

    <div class="card-body">

        <div class="form-group">

            <label>Nama Kategori</label>

            <input
                type="text"
                name="nama"
                class="form-control @error('nama') is-invalid @enderror"
                value="{{ old('nama', $umkmCategory->nama ?? '') }}"
                placeholder="Masukkan nama kategori">

            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

    </div>

    <div class="card-footer">

        <button class="btn btn-primary">
            <i class="fas fa-save"></i>
            Simpan
        </button>

        <a href="{{ route('admin.umkm-category.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </div>

</div>
