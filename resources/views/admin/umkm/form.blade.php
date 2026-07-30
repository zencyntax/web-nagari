<div class="card">

    <div class="card-body">

        <div class="row">

            {{-- Kategori --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label>Kategori UMKM <span class="text-danger">*</span></label>

                    <select
                        name="umkm_category_id"
                        class="form-control @error('umkm_category_id') is-invalid @enderror">

                        <option value="">-- Pilih Kategori --</option>

                        @foreach($categories as $category)

                            <option
                                value="{{ $category->id }}"
                                @selected(old('umkm_category_id', $umkm->umkm_category_id ?? '') == $category->id)>

                                {{ $category->nama }}

                            </option>

                        @endforeach

                    </select>

                    @error('umkm_category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
            </div>

            {{-- Status --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label>Status</label>

                    <select
                        name="status"
                        class="form-control">

                        <option value="1"
                            @selected(old('status', $umkm->status ?? 1) == 1)>
                            Aktif
                        </option>

                        <option value="0"
                            @selected(old('status', $umkm->status ?? 1) == 0)>
                            Nonaktif
                        </option>

                    </select>
                </div>
            </div>

        </div>

        <div class="row">

            {{-- Nama --}}
            <div class="col-md-6">

                <div class="form-group">

                    <label>Nama UMKM <span class="text-danger">*</span></label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama', $umkm->nama ?? '') }}">

                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>

            {{-- Pemilik --}}
            <div class="col-md-6">

                <div class="form-group">

                    <label>Nama Pemilik <span class="text-danger">*</span></label>

                    <input
                        type="text"
                        name="pemilik"
                        class="form-control @error('pemilik') is-invalid @enderror"
                        value="{{ old('pemilik', $umkm->pemilik ?? '') }}">

                    @error('pemilik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>

        </div>

        <div class="row">

            {{-- Logo --}}
            <div class="col-md-6">

                <div class="form-group">

                    <label>Logo</label>

                    <input
                        type="file"
                        name="logo"
                        class="form-control">

                    @if(isset($umkm) && $umkm->logo)
                        <img
                            src="{{ asset('storage/'.$umkm->logo) }}"
                            class="img-thumbnail mt-2"
                            width="120">
                    @endif

                </div>

            </div>

            {{-- Foto --}}
            <div class="col-md-6">

                <div class="form-group">

                    <label>Foto Utama</label>

                    <input
                        type="file"
                        name="foto"
                        class="form-control">

                    @if(isset($umkm) && $umkm->foto)
                        <img
                            src="{{ asset('storage/'.$umkm->foto) }}"
                            class="img-thumbnail mt-2"
                            width="150">
                    @endif

                </div>

            </div>

        </div>

        <div class="form-group">

            <label>Deskripsi</label>

            <textarea
                name="deskripsi"
                rows="5"
                class="form-control">{{ old('deskripsi', $umkm->deskripsi ?? '') }}</textarea>

        </div>

        <div class="form-group">

            <label>Alamat</label>

            <textarea
                name="alamat"
                rows="3"
                class="form-control">{{ old('alamat', $umkm->alamat ?? '') }}</textarea>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label>Telepon</label>
                    <input
                        type="text"
                        name="telepon"
                        class="form-control"
                        value="{{ old('telepon', $umkm->telepon ?? '') }}">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email', $umkm->email ?? '') }}">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Website</label>
                    <input
                        type="text"
                        name="website"
                        class="form-control"
                        value="{{ old('website', $umkm->website ?? '') }}">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label>Facebook</label>
                    <input
                        type="text"
                        name="facebook"
                        class="form-control"
                        value="{{ old('facebook', $umkm->facebook ?? '') }}">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Instagram</label>
                    <input
                        type="text"
                        name="instagram"
                        class="form-control"
                        value="{{ old('instagram', $umkm->instagram ?? '') }}">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>TikTok</label>
                    <input
                        type="text"
                        name="tiktok"
                        class="form-control"
                        value="{{ old('tiktok', $umkm->tiktok ?? '') }}">
                </div>
            </div>

        </div>

    </div>

    <div class="card-footer">

        <button class="btn btn-primary">
            <i class="fas fa-save"></i>
            Simpan
        </button>

        <a
            href="{{ route('admin.umkm.index') }}"
            class="btn btn-secondary">

            Kembali

        </a>

    </div>

</div>
