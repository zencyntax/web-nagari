<div class="card-body">

    <h5 class="mb-3">

        <i class="fas fa-globe mr-2"></i>

        Informasi Website

    </h5>

    <div class="row">

        <div class="col-md-6">

            <div class="form-group">

                <label>

                    Nama Website

                    <span class="text-danger">*</span>

                </label>

                <input
                    type="text"
                    name="nama_website"
                    class="form-control @error('nama_website') is-invalid @enderror"
                    value="{{ old('nama_website',$setting->nama_website) }}">

                @error('nama_website')

                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>

                @enderror

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                <label>

                    Nama Nagari

                    <span class="text-danger">*</span>

                </label>

                <input
                    type="text"
                    name="nama_nagari"
                    class="form-control @error('nama_nagari') is-invalid @enderror"
                    value="{{ old('nama_nagari',$setting->nama_nagari) }}">

                @error('nama_nagari')

                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>

                @enderror

            </div>

        </div>

    </div>

    <div class="form-group">

        <label>Slogan</label>

        <input
            type="text"
            name="slogan"
            class="form-control"
            value="{{ old('slogan',$setting->slogan) }}">

    </div>

    <hr>

    <h5 class="mb-3">

        <i class="fas fa-image mr-2"></i>

        Branding

    </h5>

    <div class="row">

    <div class="col-md-6">

        <div class="form-group">

            <label>Logo</label>

            <input
                type="file"
                name="logo"
                class="form-control"
                onchange="previewImage(this,'logoPreview')">

            @if($setting->logo)

            <img
                id="logoPreview"
                src="{{ asset('storage/'.$setting->logo) }}"
                class="img-thumbnail mt-2"
                width="150">

            @else

            <img
                id="logoPreview"
                class="img-thumbnail mt-2"
                width="150"
                style="display:none;">

            @endif

        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">

            <label>Favicon</label>

<input
    type="file"
    name="favicon"
    class="form-control"
    onchange="previewImage(this,'faviconPreview')">

@if($setting->favicon)

<img
    id="faviconPreview"
    src="{{ asset('storage/'.$setting->favicon) }}"
    class="img-thumbnail mt-2"
    width="64">

@else

<img
    id="faviconPreview"
    class="img-thumbnail mt-2"
    width="64"
    style="display:none;">

@endif

        </div>

    </div>

</div>

<div class="form-group">

    <label>Hero Image</label>

<input
    type="file"
    name="hero"
    class="form-control"
    onchange="previewImage(this,'heroPreview')">

@if($setting->hero)

<img
    id="heroPreview"
    src="{{ asset('storage/'.$setting->hero) }}"
    class="img-thumbnail mt-2"
    width="250">

@else

<img
    id="heroPreview"
    class="img-thumbnail mt-2"
    width="250"
    style="display:none;">

@endif

</div>

<hr>

<h5 class="mb-3">

    <i class="fas fa-phone-alt mr-2"></i>

    Kontak

</h5>

<div class="row">

    <div class="col-md-6">

        <div class="form-group">

            <label>Email</label>

            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email',$setting->email) }}">

        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">

            <label>Telepon</label>

            <input
                type="text"
                name="telepon"
                class="form-control"
                value="{{ old('telepon',$setting->telepon) }}">

        </div>

    </div>

</div>

<div class="form-group">

    <label>Alamat</label>

    <textarea
        name="alamat"
        rows="3"
        class="form-control">{{ old('alamat',$setting->alamat) }}</textarea>

</div>

<hr>

<h5 class="mb-3">

    <i class="fas fa-share-alt mr-2"></i>

    Sosial Media

</h5>

<div class="row">

    <div class="col-md-6">

        <div class="form-group">

            <label>Facebook</label>

            <input
                type="text"
                name="facebook"
                class="form-control"
                value="{{ old('facebook',$setting->facebook) }}">

        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">

            <label>Instagram</label>

            <input
                type="text"
                name="instagram"
                class="form-control"
                value="{{ old('instagram',$setting->instagram) }}">

        </div>

    </div>

</div>

<div class="row">

    <div class="col-md-6">

        <div class="form-group">

            <label>YouTube</label>

            <input
                type="text"
                name="youtube"
                class="form-control"
                value="{{ old('youtube',$setting->youtube) }}">

        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">

            <label>TikTok</label>

            <input
                type="text"
                name="tiktok"
                class="form-control"
                value="{{ old('tiktok',$setting->tiktok) }}">

        </div>

    </div>

</div>

<hr>

<h5 class="mb-3">

    <i class="fas fa-search mr-2"></i>

    SEO

</h5>

<div class="form-group">

    <label>Meta Title</label>

    <input
        type="text"
        name="meta_title"
        class="form-control"
        value="{{ old('meta_title',$setting->meta_title) }}">

</div>

<div class="form-group">

    <label>Meta Description</label>

    <textarea
        name="meta_description"
        rows="3"
        class="form-control">{{ old('meta_description',$setting->meta_description) }}</textarea>

</div>

<div class="form-group">

    <label>Meta Keyword</label>

    <input
        type="text"
        name="meta_keyword"
        class="form-control"
        value="{{ old('meta_keyword',$setting->meta_keyword) }}">

</div>

<div class="form-group">

    <label>Open Graph Image</label>

<input
    type="file"
    name="og_image"
    class="form-control"
    onchange="previewImage(this,'ogPreview')">

@if($setting->og_image)

<img
    id="ogPreview"
    src="{{ asset('storage/'.$setting->og_image) }}"
    class="img-thumbnail mt-2"
    width="250">

@else

<img
    id="ogPreview"
    class="img-thumbnail mt-2"
    width="250"
    style="display:none;">

@endif

</div>

<hr>

<h5 class="mb-3">

    <i class="fas fa-copyright mr-2"></i>

    Footer

</h5>

<div class="form-group">

    <label>Copyright</label>

    <textarea
        name="copyright"
        rows="2"
        class="form-control">{{ old('copyright',$setting->copyright) }}</textarea>

</div>

</div>

<div class="card-footer">

    <button class="btn btn-primary">

        <i class="fas fa-save"></i>

        Simpan Pengaturan

    </button>

</div>
