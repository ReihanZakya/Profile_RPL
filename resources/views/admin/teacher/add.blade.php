@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('teacher/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Guru</label>
                    <input type="text" name="teacher_name" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <select name="gender" class="form-control custom-select">
                        <option selected="" disabled="">---Pilih---</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Posisi</label>
                    <select name="position_types" class="form-control custom-select">
                        <option selected="" disabled="">---Pilih---</option>
                        <option value="Kepala Prodi">Kepala Prodi</option>
                        <option value="Guru RPL">Guru RPL</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Foto</label>
                    <input type="file" name="photo" class="form-control" id=" formFile">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
