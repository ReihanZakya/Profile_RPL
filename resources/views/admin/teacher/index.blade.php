@extends('backend.admin.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ $title }}
            <a href="{{ url('teacher/add_teacher') }}" class="btn btn-primary btn-sm float-right">Tambah Guru</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Guru</th>
                        <th>Photo</th>
                        <th>Jenis Kelamin</th>
                        <th>Jenis Posisi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->name }}</td>
                            <td>
                                <img src="{{ asset('AdminLTE/teacher/' . $dt->photo) }}" style="width:65px;">
                            </td>
                            @if ($dt->gender == 1)
                                <td>Laki-laki</td>
                            @else
                                <td>Perempuan</td>
                            @endif
                            @if ($dt->position_types == 1)
                                <td>Kepala Prodi</td>
                            @else
                                <td>Guru RPL</td>
                            @endif
                            <td>
                                <a href="{{ url('teacher/' . $dt->id . '/edit') }}"
                                    class="btn btn-warning btn-sm btn-outline-light">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm btn-outline-light delete"
                                    data-id="{{ $dt->id }}" data-nama="{{ $dt->name }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


@push('datatables')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    {{-- Delete confirmation --}}
    <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // Delete confirmation
        $('.delete').click(function() {
            var namaid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin?",
                    text: "Kamu akan menghapus data dengan nama " + nama + " ?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "teacher/" + namaid + "/delete"
                        swal("Data berhasi di hapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });
    </script>

@endpush
