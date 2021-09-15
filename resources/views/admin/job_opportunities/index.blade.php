@extends('backend.admin.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ $title }}
            <a href="{{ url('job_opportunities/add_job') }}" class="btn btn-primary btn-sm float-right">Tambah Peluang
                Kerja</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Peluang Kerja</th>
                        <th>Deskripsi Peluang Kerja</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->job_name }}</td>
                        <td>{{ $dt->job_description }}</td>
                        <td>
                            <img src="{{ asset('AdminLTE/job_opportunities/' . $dt->photo) }}" style="width: 100px;">
                        </td>
                        <td>
                            <a href="{{ url('job_opportunities/' . $dt->id . '/edit') }}"
                                class="btn btn-warning btn-sm btn-outline-light">Edit</a>
                            <a href="{{ url('job_opportunities/' . $dt->id . '/delete') }}"
                                class="btn btn-danger btn-sm btn-outline-light">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
