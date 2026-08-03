<div
    class="modal fade"
    id="editMissionModal">

    <div class="modal-dialog">

        <form
            id="editMissionForm"
            method="POST">

            @csrf
            @method('PUT')

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">

                        Edit Misi

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
                            id="editIsi"
                            name="isi"
                            rows="4"
                            class="form-control"
                            required></textarea>

                    </div>

                    <div class="form-group">

                        <label>Urutan</label>

                        <input
                            id="editUrutan"
                            type="number"
                            name="urutan"
                            class="form-control"
                            required>

                    </div>

                </div>

                <div class="modal-footer">

                    <button
                        class="btn btn-primary">

                        Update

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>
