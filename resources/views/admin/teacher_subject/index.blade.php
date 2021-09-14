@extends('backend.admin.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ $title }}
            <a href="{{ url('manage_teacher_subject/add_teacher_subject') }}"
                class="btn btn-primary btn-sm float-right">Tambah Guru Mapel</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Guru</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->teacher->teacher_name }}</td>
                            <td>{{ $dt->subject->subject_name }}</td>
                            <td>{{ $dt->subject->class }}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm btn-outline-light">Edit</a>
                                <a href="" class="btn btn-danger btn-sm btn-outline-light">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
