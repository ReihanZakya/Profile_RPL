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
                            <td>{{ $dt->teacher_name }}</td>
                            <td>
                                <img src="{{ asset('AdminLTE/teacher/' . $dt->photo) }}" style="width: 100px;">
                            </td>
                            <td>{{ $dt->gender }}</td>
                            <td>{{ $dt->position_types }}</td>
                            <td>
                                <a href="{{ url('teacher/' . $dt->id . '/edit') }}"
                                    class="btn btn-warning btn-sm btn-outline-light">Edit</a>
                                <a href="{{ url('teacher/' . $dt->id . '/delete') }}"
                                    class="btn btn-danger btn-sm btn-outline-light">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
