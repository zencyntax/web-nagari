<div
    class="modal fade"
    id="createMissionModal">

    <div class="modal-dialog">

        <form
            action="{{ route('admin.profile.missions.store') }}"
            method="POST">

            @csrf

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">

                        Tambah Misi

                    </h5>

                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal">

                        &times;

                    </button>

                </div>

                <div class="modal-body">

                    <div class="form-group">

                        <label>Isi Misi</label>

                        <textarea
                            name="isi"
                            rows="4"
                            class="form-control"
                            required></textarea>

                    </div>

                    <div class="form-group">

                        <label>Urutan</label>

                        <input
                            type="number"
                            name="urutan"
                            value="1"
                            class="form-control"
                            required>

                    </div>

                </div>

                <div class="modal-footer">

                    <button
                        class="btn btn-primary">

                        Simpan

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>
