<div class="card">
    <div class="card-body">

        <div class="form-group mb-3">
            <label>Nama Lembaga <span class="text-danger">*</span></label>
            <input type="text"
                   name="nama"
                   class="form-control @error('nama') is-invalid @enderror"
                   value="{{ old('nama', $lembaga->nama ?? '') }}"
                   placeholder="Masukkan nama lembaga">

            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label>Ketua <span class="text-danger">*</span></label>
            <input type="text"
                   name="ketua"
                   class="form-control @error('ketua') is-invalid @enderror"
                   value="{{ old('ketua', $lembaga->ketua ?? '') }}"
                   placeholder="Masukkan nama ketua">

            @error('ketua')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label>Deskripsi</label>

            <textarea
                name="deskripsi"
                rows="5"
                class="form-control @error('deskripsi') is-invalid @enderror"
                placeholder="Deskripsi lembaga">{{ old('deskripsi', $lembaga->deskripsi ?? '') }}</textarea>

            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label>Logo</label>

            <input type="file"
                   name="logo"
                   class="form-control @error('logo') is-invalid @enderror">

            @error('logo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @if(isset($lembaga) && $lembaga->logo)
                <div class="mt-3">
                    <img src="{{ asset('storage/'.$lembaga->logo) }}"
                         width="120"
                         class="img-thumbnail">
                </div>
            @endif
        </div>

        <div class="form-group mb-3">
            <label>Urutan</label>

            <input type="number"
                   name="urutan"
                   class="form-control @error('urutan') is-invalid @enderror"
                   value="{{ old('urutan', $lembaga->urutan ?? 0) }}">

            @error('urutan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label>Status</label>

            <select name="status"
                    class="form-control">

                <option value="1"
                    {{ old('status', $lembaga->status ?? true) ? 'selected' : '' }}>
                    Aktif
                </option>

                <option value="0"
                    {{ old('status', $lembaga->status ?? true) == false ? 'selected' : '' }}>
                    Nonaktif
                </option>

            </select>
        </div>

    </div>

    <div class="card-footer">

        <button class="btn btn-primary">
            <i class="fas fa-save"></i>
            Simpan
        </button>

        <a href="{{ route('admin.lembaga.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>

    </div>
</div>
