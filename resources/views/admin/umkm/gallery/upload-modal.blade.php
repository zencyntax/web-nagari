<div class="modal fade" id="uploadGalleryModal" tabindex="-1">

    <div class="modal-dialog modal-lg">

        <form
            action="{{ route('admin.umkm.gallery.store',$umkm) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="modal-content">

                <div class="modal-header bg-primary">

                    <h5 class="modal-title">

                        <i class="fas fa-images mr-2"></i>

                        Upload Foto Galeri

                    </h5>

                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <input
                        type="hidden"
                        name="umkm_id"
                        value="{{ $umkm->id }}">

                    <div class="form-group">

                        <label>Judul Foto</label>

                        <input
                            type="text"
                            name="judul"
                            class="form-control"
                            placeholder="Contoh : Proses Produksi">

                    </div>

                    <div class="form-group">

                        <label>Urutan</label>

                        <input
                            type="number"
                            name="urutan"
                            class="form-control"
                            value="{{ $umkm->galleries->count()+1 }}"
                            min="1">

                    </div>

                    <div class="form-group">

                        <label>

                            Pilih Foto

                            <span class="text-danger">*</span>

                        </label>

                        <input
                            type="file"
                            id="galleryImages"
                            name="foto[]"
                            class="form-control"
                            multiple
                            accept="image/*">

                        <small class="text-muted">

                            Bisa memilih beberapa foto sekaligus.

                        </small>

                    </div>

                    <div
                        class="row mt-3"
                        id="galleryPreview">

                    </div>

                </div>

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">

                        Batal

                    </button>

                    <button
                        class="btn btn-primary">

                        <i class="fas fa-upload"></i>

                        Upload

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>
