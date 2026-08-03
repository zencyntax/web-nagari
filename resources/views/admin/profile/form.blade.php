<div class="card-body">

<ul class="nav nav-tabs" id="profileTab" role="tablist">

    <li class="nav-item">

        <a
            class="nav-link active"
            data-toggle="tab"
            href="#sambutan">

            Sambutan

        </a>

    </li>

    <li class="nav-item">

        <a
            class="nav-link"
            data-toggle="tab"
            href="#sejarah">

            Sejarah

        </a>

    </li>

    <li class="nav-item">

        <a
            class="nav-link"
            data-toggle="tab"
            href="#visi">

            Visi

        </a>

    </li>

    <li class="nav-item">

        <a
            class="nav-link"
            data-toggle="tab"
            href="#gambaran">

            Gambaran Umum

        </a>

    </li>

    <li class="nav-item">

        <a
            class="nav-link"
            data-toggle="tab"
            href="#wilayah">

            Letak Wilayah

        </a>

    </li>

</ul>

<div class="tab-content pt-4">

<div
    class="tab-pane fade show active"
    id="sambutan">

<div class="row">

<div class="col-md-4">

<label>Foto Wali Nagari</label>

<input
    type="file"
    name="foto_wali"
    class="form-control @error('foto_wali') is-invalid @enderror"
    onchange="previewImage(this,'fotoPreview')">

@error('foto_wali')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

@if($profile->foto_wali)

<img
    id="fotoPreview"
    src="{{ asset('storage/'.$profile->foto_wali) }}"
    class="img-thumbnail mt-2"
    width="200">

@else

<img
    id="fotoPreview"
    class="img-thumbnail mt-2"
    width="200"
    style="display:none;">

@endif

</div>

<div class="col-md-8">

<div class="form-group">

<label>Nama Wali Nagari</label>

<input
    type="text"
    name="nama_wali"
    class="form-control @error('nama_wali') is-invalid @enderror"
    value="{{ old('nama_wali',$profile->nama_wali) }}">

@error('nama_wali')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

</div>

<div class="form-group">

<label>Jabatan</label>

<input
    type="text"
    name="jabatan_wali"
    class="form-control @error('jabatan_wali') is-invalid @enderror"
    value="{{ old('jabatan_wali',$profile->jabatan_wali) }}">

@error('jabatan_wali')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

</div>

<div class="form-group">

<label>Sambutan</label>

<textarea
    name="sambutan"
    class="form-control editor @error('sambutan') is-invalid @enderror"
    rows="8">{{ old('sambutan',$profile->sambutan) }}</textarea>

@error('sambutan')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

</div>

</div>

</div>

</div>

<div class="tab-pane fade" id="sejarah">

    <div class="form-group">

        <label>Tanggal Berdiri</label>

        <input
    type="date"
    name="tanggal_berdiri"
    class="form-control @error('tanggal_berdiri') is-invalid @enderror"
    value="{{ old('tanggal_berdiri',$profile->tanggal_berdiri) }}">

@error('tanggal_berdiri')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

    </div>

    <div class="form-group">

        <label>Sejarah Nagari</label>

        <textarea
    name="sejarah"
    class="form-control editor @error('sejarah') is-invalid @enderror"
    rows="10">{{ old('sejarah',$profile->sejarah) }}</textarea>

@error('sejarah')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

    </div>

</div>

<div class="tab-pane fade" id="visi">

    <div class="form-group">

        <label>Visi Nagari</label>

        <textarea
    name="visi"
    class="form-control editor @error('visi') is-invalid @enderror"
    rows="8">{{ old('visi',$profile->visi) }}</textarea>

@error('visi')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

    </div>

    <div class="alert alert-info">

        <i class="fas fa-info-circle"></i>

        Misi dikelola melalui menu <strong>Misi</strong> di bawah halaman ini.

    </div>

</div>

<div class="tab-pane fade" id="gambaran">

    <div class="form-group">

        <label>Gambaran Umum</label>

        <textarea
    name="gambaran_umum"
    class="form-control editor @error('gambaran_umum') is-invalid @enderror"
    rows="8">{{ old('gambaran_umum',$profile->gambaran_umum) }}</textarea>

@error('gambaran_umum')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

    </div>

    <hr>

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">

                <label>Jumlah Penduduk</label>

                <input
    type="number"
    name="jumlah_penduduk"
    class="form-control @error('jumlah_penduduk') is-invalid @enderror"
    value="{{ old('jumlah_penduduk',$profile->jumlah_penduduk) }}">

@error('jumlah_penduduk')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">

                <label>Laki-laki</label>

                <input
    type="number"
    name="jumlah_laki_laki"
    class="form-control @error('jumlah_laki_laki') is-invalid @enderror"
    value="{{ old('jumlah_laki_laki',$profile->jumlah_laki_laki) }}">

@error('jumlah_laki_laki')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label>Perempuan</label>
                <input
    type="number"
    name="jumlah_perempuan"
    class="form-control @error('jumlah_perempuan') is-invalid @enderror"
    value="{{ old('jumlah_perempuan',$profile->jumlah_perempuan) }}">

@error('jumlah_perempuan')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">

                <label>Jumlah KK</label>

                <input
    type="number"
    name="jumlah_kk"
    class="form-control @error('jumlah_kk') is-invalid @enderror"
    value="{{ old('jumlah_kk',$profile->jumlah_kk) }}">

@error('jumlah_kk')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

            </div>

        </div>

        <div class="col-md-4">

    <div class="form-group">

        <label>KK Laki-laki</label>

        <input
            type="number"
            name="kk_laki_laki"
            class="form-control @error('kk_laki_laki') is-invalid @enderror"
            value="{{ old('kk_laki_laki',$profile->kk_laki_laki) }}">

        @error('kk_laki_laki')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

    </div>

</div>

<div class="col-md-4">

    <div class="form-group">

        <label>KK Perempuan</label>

        <input
            type="number"
            name="kk_perempuan"
            class="form-control @error('kk_perempuan') is-invalid @enderror"
            value="{{ old('kk_perempuan',$profile->kk_perempuan) }}">

        @error('kk_perempuan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

    </div>

</div>

        <div class="col-md-4">

            <div class="form-group">

                <label>Jumlah Jorong</label>

                <input
    type="number"
    name="jumlah_jorong"
    class="form-control @error('jumlah_jorong') is-invalid @enderror"
    value="{{ old('jumlah_jorong',$profile->jumlah_jorong) }}">

@error('jumlah_jorong')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">

                <label>Luas Wilayah</label>

                <input
    type="text"
    name="luas_wilayah"
    class="form-control @error('luas_wilayah') is-invalid @enderror"
    value="{{ old('luas_wilayah',$profile->luas_wilayah) }}">

@error('luas_wilayah')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

            </div>

        </div>

    </div>

</div>

<div class="tab-pane fade" id="wilayah">

    <div class="row">

        <div class="col-md-6">

            <div class="form-group">

                <label>Provinsi</label>

                <input
                    type="text"
                    name="provinsi"
                    class="form-control"
                    value="{{ old('provinsi',$profile->provinsi) }}">

                    @error('provinsi')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                <label>Kabupaten</label>

                <input
                    type="text"
                    name="kabupaten"
                    class="form-control"
                    value="{{ old('kabupaten',$profile->kabupaten) }}">

                    @error('kabupaten')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror
            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">

                <label>Kecamatan</label>

                <input
                    type="text"
                    name="kecamatan"
                    class="form-control"
                    value="{{ old('kecamatan',$profile->kecamatan) }}">

                    @error('kecamatan')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">

                <label>Ketinggian</label>

                <input
                    type="text"
                    name="ketinggian"
                    class="form-control"
                    placeholder="Contoh: 850 mdpl"
                    value="{{ old('ketinggian',$profile->ketinggian) }}">

                    @error('ketinggian')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">

                <label>Kode Pos</label>

                <input
                    type="text"
                    name="kode_pos"
                    class="form-control"
                    value="{{ old('kode_pos',$profile->kode_pos) }}">
@error('kode_pos')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror
            </div>

        </div>

    </div>

    <div class="form-group">

       <div class="form-group">

    <label>
        Link Google Maps Embed
    </label>

    <textarea
        name="peta"
        rows="8"
        class="form-control @error('peta') is-invalid @enderror"
        placeholder="Paste link Google Maps Embed di sini...">{{ old('peta', $profile->peta) }}</textarea>

    @error('peta')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <small class="text-muted">

        Cara mengambil link:

        <br>

        Google Maps →
        Bagikan →
        Sematkan Peta →
        Salin URL pada atribut
        <strong>src</strong>

    </small>

</div>

@if($profile->peta)

<div class="mt-3">

    <label>
        Preview Google Maps
    </label>

    <iframe
        src="{{ $profile->peta }}"
        width="100%"
        height="350"
        style="border:1px solid #dee2e6;border-radius:10px;"
        loading="lazy"
        allowfullscreen>
    </iframe>

</div>

@endif

</div>

</div>

</div>

<div class="card-footer">

    <button type="submit" class="btn btn-primary">

        <i class="fas fa-save"></i>

        Simpan Perubahan

    </button>

</div>
