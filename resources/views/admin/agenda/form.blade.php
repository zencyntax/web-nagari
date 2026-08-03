<div class="card">

    <div class="card-header">

        <h3 class="card-title">

            Form Agenda

        </h3>

    </div>

    <div class="card-body">

        <div class="form-group">

            <label>Judul Agenda</label>

            <input
                type="text"
                name="title"
                class="form-control"
                value="{{ old('title',$agenda->title ?? '') }}"
                required>

        </div>

        <div class="form-group">

            <label>Thumbnail</label>

            <input
                type="file"
                name="thumbnail"
                class="form-control">

            @isset($agenda)

                @if($agenda->thumbnail)

                    <img
                        src="{{ asset('storage/'.$agenda->thumbnail) }}"
                        width="200"
                        class="mt-2">

                @endif

            @endisset

        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="form-group">

                    <label>Lokasi</label>

                    <input
                        type="text"
                        name="location"
                        class="form-control"
                        value="{{ old('location',$agenda->location ?? '') }}"
                        required>

                </div>

            </div>

            <div class="col-md-3">

                <div class="form-group">

                    <label>Tanggal</label>

                    <input
                        type="date"
                        name="date"
                        class="form-control"
                        value="{{ old('date',$agenda->date ?? '') }}"
                        required>

                </div>

            </div>

            <div class="col-md-3">

                <div class="form-group">

                    <label>Jam</label>

                    <input
                        type="time"
                        name="time"
                        class="form-control"
                        value="{{ old('time',$agenda->time ?? '') }}"
                        required>

                </div>

            </div>

        </div>

        <div class="form-group">

            <label>Status</label>

            <select
                name="status"
                class="form-control">

                <option
                    value="Draft"
                    @selected(old('status',$agenda->status ?? '')=='Draft')>

                    Draft

                </option>

                <option
                    value="Publish"
                    @selected(old('status',$agenda->status ?? '')=='Publish')>

                    Publish

                </option>

            </select>

        </div>

        <div class="form-group">

            <label>Deskripsi Agenda</label>

            <textarea
                id="editor"
                name="description"
                rows="10"
                class="form-control">{{ old('description',$agenda->description ?? '') }}</textarea>

        </div>

    </div>

    <div class="card-footer">

        <button
            class="btn btn-primary">

            Simpan

        </button>

        <a
            href="{{ route('admin.agenda.index') }}"
            class="btn btn-secondary">

            Kembali

        </a>

    </div>

</div>
