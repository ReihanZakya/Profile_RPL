@extends('backend.admin.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ $title }}
            <a href="{{ url('documentation/add_documentation') }}" class="btn btn-primary btn-sm float-right">Tambah
                Dokumentasi</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Photo</th>
                        <th>Sumber</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->name }}</td>
                            <td>
                                <img src="{{ asset('AdminLTE/documentation/' . $dt->photo) }}" style="width: 100px;">
                            </td>
                            <td>{{ $dt->source }}</td>
                            <td>
                                <a href="{{ url('documentation/' . $dt->id . '/edit') }}"
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
                        window.location = "documentation/" + namaid + "/delete"
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
