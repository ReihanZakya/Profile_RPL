@extends('backend.admin.dashboard')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ $title }}
            <a href="{{ url('subject/add') }}" class="btn btn-primary btn-sm float-right">Tambah Mata
                Pelajaran</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->name }}</td>
                            @if ($dt->class == 1)
                                <td>Kelas X</td>
                            @elseif ($dt->class == 2)
                                <td>Kelas XI</td>
                            @elseif ($dt->class == 3)
                                <td>Kelas XII</td>
                            @endif
                            <td>
                                <a href="{{ url('subject/' . $dt->id . '/edit') }}"
                                    class="btn btn-warning btn-sm btn-outline-light">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm btn-outline-light delete"
                                    data-id="{{ $dt->id }}" data-nama="{{ $dt->name }}">Hapus</a>
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
        //DataTables
        $(document).ready(function() {
            $('.table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5,
                "lengthMenu": [5, 10, 15, 20],
                "language": {
                    "emptyTable": "Tidak ada data yang tersedia pada tabel ini",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                    "infoFiltered": "(diambil dari _MAX_ data keseluruhan)",
                    "lengthMenu": "Tampilkan _MENU_ data",
                    "loadingRecords": "Sedang memuat...",
                    "processing": "Sedang memproses...",
                    "search": "Cari:",
                    "zeroRecords": "Tidak ditemukan data yang sesuai",
                    "thousands": "'",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });
        });
    </script>
@endpush
@push('confirmation')
    {{-- Delete confirmation --}}
    <script src="{{ asset('sweetalert@2.1.2/dist/sweetalert.min.js') }}"></script>
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
                        window.location = "subject/" + namaid + "/delete"
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
@push('alert')
    {{-- toastr --}}
    <link rel="stylesheet" href="{{ asset('AdminLTE/ajax/libs/toastr.js/toastr.css') }}">

    <script src="{{ asset('AdminLTE/ajax/libs/toastr.js/toastr.min.js') }}"></script>

    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
@endpush
