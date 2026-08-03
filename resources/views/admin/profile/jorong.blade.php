<hr class="mt-5 mb-4">

<div class="card">

    <div class="card-header">

        <h3 class="card-title">
            Daftar Jorong
        </h3>

    </div>

    <div class="card-body">

        {{-- FORM TAMBAH JORONG --}}
        <form action="{{ route('admin.profile.jorong.store') }}" method="POST">

            @csrf

            <div class="row">

                <div class="col-md-10">

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        placeholder="Masukkan nama jorong..."
                        required>

                </div>

                <div class="col-md-2">

                    <button
                        type="submit"
                        class="btn btn-success btn-block">

                        <i class="fas fa-plus"></i>

                        Tambah

                    </button>

                </div>

            </div>

        </form>

        <hr>

        {{-- TABEL --}}
        <table class="table table-bordered table-hover">

            <thead>

                <tr>

                    <th width="60">No</th>

                    <th>Nama Jorong</th>

                    <th width="180">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($jorongs as $jorong)

                    <tr>

                        <td>

                            {{ $loop->iteration }}

                        </td>

                        <td>

                            {{ $jorong->nama }}

                        </td>

                        <td>

                            <button
                                type="button"
                                class="btn btn-warning btn-sm"
                                data-toggle="modal"
                                data-target="#editJorong{{ $jorong->id }}">

                                <i class="fas fa-edit"></i>

                                Edit

                            </button>

                            <form
                                action="{{ route('admin.profile.jorong.destroy', $jorong->id) }}"
                                method="POST"
                                style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus jorong ini?')">

                                    <i class="fas fa-trash"></i>

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="3" class="text-center">

                            Belum ada data jorong.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>


{{-- ========================= --}}
{{-- MODAL EDIT --}}
{{-- ========================= --}}

@foreach($jorongs as $jorong)

<div
    class="modal fade"
    id="editJorong{{ $jorong->id }}"
    tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form
                action="{{ route('admin.profile.jorong.update', $jorong->id) }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="modal-header">

                    <h5 class="modal-title">

                        Edit Jorong

                    </h5>

                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <div class="form-group">

                        <label>

                            Nama Jorong

                        </label>

                        <input
                            type="text"
                            name="nama"
                            class="form-control"
                            value="{{ $jorong->nama }}"
                            required>

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
                        type="submit"
                        class="btn btn-primary">

                        Simpan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endforeach
