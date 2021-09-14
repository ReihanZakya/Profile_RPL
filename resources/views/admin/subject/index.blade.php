@extends('backend.admin.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ $title }}
            <a href="{{ url('manage_subject/add_subject') }}" class="btn btn-primary btn-sm float-right">Tambah Mata
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
                            <td>{{ $dt->subject_name }}</td>
                            <td>{{ $dt->class }}</td>
                            <td>
                                <a href="{{ url('subject/' . $dt->id . '/edit') }}"
                                    class="btn btn-warning btn-sm btn-outline-light">Edit</a>
                                <a href="{{ url('subject/' . $dt->id . '/delete') }}"
                                    class="btn btn-danger btn-sm btn-outline-light">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
