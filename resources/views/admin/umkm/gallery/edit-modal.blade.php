<div class="modal fade" id="editGalleryModal" tabindex="-1">

    <div class="modal-dialog modal-lg">

        <form
            id="editGalleryForm"
            method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="modal-content">

                <div class="modal-header bg-warning">

                    <h5 class="modal-title">

                        <i class="fas fa-edit mr-2"></i>

                        Edit Foto Galeri

                    </h5>

                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <div class="text-center mb-3">

                        <img
                            id="editPreview"
                            src=""
                            class="img-thumbnail"
                            style="max-height:220px">

                    </div>

                    <div class="form-group">

                        <label>Judul</label>

                        <input
                            type="text"
                            name="judul"
                            id="editJudul"
                            class="form-control">

                    </div>

                    <div class="form-group">

                        <label>Urutan</label>

                        <input
                            type="number"
                            name="urutan"
                            id="editUrutan"
                            class="form-control"
                            min="1">

                    </div>

                    <div class="form-group">

                        <label>Ganti Foto</label>

                        <input
                            type="file"
                            name="foto"
                            id="editFoto"
                            class="form-control"
                            accept="image/*">

                        <small class="text-muted">

                            Kosongkan jika tidak ingin mengganti foto.

                        </small>

                    </div>

                    <div
                        class="text-center mt-3"
                        id="newPreviewContainer"
                        style="display:none;">

                        <p class="mb-2">

                            Preview Foto Baru

                        </p>

                        <img
                            id="newPreview"
                            src=""
                            class="img-thumbnail"
                            style="max-height:220px">

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
                        class="btn btn-warning">

                        <i class="fas fa-save"></i>

                        Simpan Perubahan

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>
