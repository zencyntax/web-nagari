<div class="card card-primary mt-4">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h3 class="card-title">

            <i class="fas fa-images mr-2"></i>

            Galeri Foto UMKM

        </h3>

        <button
            type="button"
            class="btn btn-light btn-sm"
            data-toggle="modal"
            data-target="#uploadGalleryModal">

            <i class="fas fa-plus"></i>

            Upload Foto

        </button>

    </div>

    <div class="card-body">

        @if($umkm->galleries->isEmpty())

            <div class="alert alert-info mb-0">

                Belum ada foto galeri.

            </div>

        @else

            <div class="row">

                @foreach($umkm->galleries as $gallery)

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                        <div class="card shadow-sm h-100">

                            <img
                                src="{{ asset('storage/'.$gallery->foto) }}"
                                class="card-img-top"
                                style="height:180px;object-fit:cover">

                            <div class="card-body">

                                <strong>

                                    {{ $gallery->judul ?: '-' }}

                                </strong>

                                <br>

                                <small class="text-muted">

                                    Urutan :

                                    {{ $gallery->urutan }}

                                </small>

                            </div>

                            <div class="card-footer">

                                <button
                                    type="button"
                                    class="btn btn-warning btn-sm btn-block edit-gallery"

                                    data-id="{{ $gallery->id }}"

                                    data-judul="{{ $gallery->judul }}"

                                    data-urutan="{{ $gallery->urutan }}"

                                    data-foto="{{ asset('storage/'.$gallery->foto) }}"
                                    
                                    data-update="{{ route('admin.umkm.gallery.update', $gallery) }}">
                                    <i class="fas fa-edit"></i>

                                    Edit

                                </button>

                                <form
                                    action="{{ route('admin.umkm.gallery.destroy',$gallery) }}"
                                    method="POST"
                                    class="delete-gallery mt-2">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        class="btn btn-danger btn-sm btn-block">

                                        <i class="fas fa-trash"></i>

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </div>

</div>

@include('admin.umkm.gallery.upload-modal')

@include('admin.umkm.gallery.edit-modal')
