@extends('backend.admin.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ $title }}
            <a href="{{ url('portfolio/add_portfolio') }}" class="btn btn-primary btn-sm float-right">Tambah Portofolio</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Photo</th>
                        <th>Sumber</th>
                        <th>Kelompok</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->name }}</td>
                            <td>
                                <img src="{{ asset('AdminLTE/portfolio/' . $dt->photo) }}" style="width: 65px;">
                            </td>
                            <td>{{ $dt->source }}</td>
                            <td>{{ $dt->group  }}</td>
                            <td>
                                <a href="{{ url('portfolio/' . $dt->id . '/edit') }}"
                                    class="btn btn-warning btn-sm btn-outline-light">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm btn-outline-light delete" data-id="{{ $dt->id }}" data-nama="{{ $dt->name }}">Delete</a>
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
    <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script>
    <script src="{{asset ('javascript/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

@endpush
