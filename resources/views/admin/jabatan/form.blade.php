<div class="mb-3">
    <label for="nama_jabatan" class="form-label">
        Nama Jabatan
    </label>

    <input
        type="text"
        name="nama_jabatan"
        id="nama_jabatan"
        class="form-control @error('nama_jabatan') is-invalid @enderror"
        value="{{ old('nama_jabatan', $jabatan->nama_jabatan ?? '') }}"
        placeholder="Contoh : Wali Nagari">

    @error('nama_jabatan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="urutan" class="form-label">
        Urutan
    </label>

    <input
        type="number"
        name="urutan"
        id="urutan"
        class="form-control @error('urutan') is-invalid @enderror"
        value="{{ old('urutan', $jabatan->urutan ?? 0) }}">

    @error('urutan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="text-end">
    <a href="{{ route('admin.jabatan.index') }}" class="btn btn-secondary">
        Kembali
    </a>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>
</div>
