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
                        <th>Judul</th>
                        <th>Photo</th>
                        <th>Sumber</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->port_name }}</td>
                        <td>
                            <img src="{{ asset('AdminLTE/portofolio/' . $dt->photo) }}" style="width: 100px;">
                        </td>
                        <td>{{ $dt->port_source }}</td>
                        <td>
                            <a href="{{ url('portfolio/' . $dt->id . '/edit') }}"
                                class="btn btn-warning btn-sm btn-outline-light">Edit</a>
                            <a href="{{ url('portfolio/' . $dt->id . '/delete') }}"
                                class="btn btn-danger btn-sm btn-outline-light">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
