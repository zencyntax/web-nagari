<div class="card card-primary mt-4">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h3 class="card-title">

            Daftar Misi Nagari

        </h3>

        <button
            class="btn btn-success btn-sm"
            data-toggle="modal"
            data-target="#createMissionModal">

            <i class="fas fa-plus"></i>

            Tambah Misi

        </button>

    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead>

                <tr>

                    <th width="70">No</th>

                    <th>Misi</th>

                    <th width="100">Urutan</th>

                    <th width="180">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($missions as $mission)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $mission->isi }}</td>

                    <td>{{ $mission->urutan }}</td>

                    <td>

                        <button
                            class="btn btn-warning btn-sm btn-edit"

                            data-id="{{ $mission->id }}"
                            data-isi="{{ $mission->isi }}"
                            data-urutan="{{ $mission->urutan }}"
                            data-update="{{ route('admin.profile.missions.update',$mission) }}">

                            <i class="fas fa-edit"></i>

                        </button>

                        <form
                            action="{{ route('admin.profile.missions.destroy',$mission) }}"
                            method="POST"
                            class="d-inline delete-form">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm">

                                <i class="fas fa-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="4" class="text-center">

                        Belum ada data misi.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@include('admin.profile.missions.create-modal')
@include('admin.profile.missions.edit-modal')
