<div class="card">

    <div class="card-body">

        {{-- Jabatan --}}
        <div class="form-group">
            <label>Jabatan <span class="text-danger">*</span></label>

            <select name="jabatan_id"
                    class="form-control @error('jabatan_id') is-invalid @enderror">

                <option value="">-- Pilih Jabatan --</option>

                @foreach($jabatans as $jabatan)
                    <option value="{{ $jabatan->id }}"
                        {{ old('jabatan_id', $perangkat->jabatan_id ?? '') == $jabatan->id ? 'selected' : '' }}>
                        {{ $jabatan->nama_jabatan }}
                    </option>
                @endforeach

            </select>

            @error('jabatan_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        {{-- Nama --}}
        <div class="form-group">

            <label>Nama Perangkat <span class="text-danger">*</span></label>

            <input
                type="text"
                name="nama"
                class="form-control @error('nama') is-invalid @enderror"
                value="{{ old('nama', $perangkat->nama ?? '') }}"
                placeholder="Masukkan nama perangkat">

            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        {{-- Foto --}}
        <div class="form-group">

            <label>Foto</label>

            <input
                type="file"
                name="foto"
                class="form-control-file @error('foto') is-invalid @enderror">

            @error('foto')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
            @enderror

            @isset($perangkat)
                @if($perangkat->foto)

                    <div class="mt-3">

                        <img
                            src="{{ asset('storage/' . $perangkat->foto) }}"
                            width="150"
                            class="img-thumbnail">

                    </div>

                @endif
            @endisset

        </div>

        {{-- Urutan --}}
        <div class="form-group">

            <label>Urutan</label>

            <input
                type="number"
                name="urutan"
                class="form-control @error('urutan') is-invalid @enderror"
                value="{{ old('urutan', $perangkat->urutan ?? 0) }}">

            @error('urutan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        {{-- Status --}}
        <div class="form-group">

            <label>Status</label>

            <select
                name="status"
                class="form-control">

                <option value="1"
                    {{ old('status', $perangkat->status ?? 1) == 1 ? 'selected' : '' }}>
                    Aktif
                </option>

                <option value="0"
                    {{ old('status', $perangkat->status ?? 1) == 0 ? 'selected' : '' }}>
                    Tidak Aktif
                </option>

            </select>

        </div>

    </div>

    <div class="card-footer">

        <button class="btn btn-primary">

            <i class="fas fa-save"></i>

            Simpan

        </button>

        <a href="{{ route('admin.perangkat.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>

    </div>

</div>
