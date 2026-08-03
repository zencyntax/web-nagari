<div class="card">

    <div class="card-header">
        <h3 class="card-title">
            Form Berita
        </h3>
    </div>

    <div class="card-body">

        <div class="form-group">

            <label>Judul Berita</label>

            <input
                type="text"
                name="title"
                class="form-control"
                value="{{ old('title',$news->title ?? '') }}"
                required>

        </div>

        <div class="form-group">

            <label>Thumbnail</label>

            <input
                type="file"
                name="thumbnail"
                class="form-control">

            @isset($news)

                @if($news->thumbnail)

                    <img
                        src="{{ asset('storage/'.$news->thumbnail) }}"
                        width="200"
                        class="mt-2">

                @endif

            @endisset

        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="form-group">

                    <label>Status</label>

                    <select
                        name="status"
                        class="form-control">

                        <option value="Draft"
                            @selected(old('status',$news->status ?? '')=='Draft')>

                            Draft

                        </option>

                        <option value="Publish"
                            @selected(old('status',$news->status ?? '')=='Publish')>

                            Publish

                        </option>

                    </select>

                </div>

            </div>

            <div class="col-md-6">

                <div class="form-group">

                    <label>Tanggal Publish</label>

                    <input
                        type="date"
                        name="published_at"
                        class="form-control"
                        value="{{ old('published_at',$news->published_at ?? '') }}">

                </div>

            </div>

        </div>

        <div class="form-group">

            <label>Isi Berita</label>

            <textarea
                name="content"
                id="editor"
                rows="12"
                class="form-control">{{ old('content',$news->content ?? '') }}</textarea>

        </div>

    </div>

    <div class="card-footer">

        <button class="btn btn-primary">

            Simpan

        </button>

        <a
            href="{{ route('admin.berita.index') }}"
            class="btn btn-secondary">

            Kembali

        </a>

    </div>

</div>
