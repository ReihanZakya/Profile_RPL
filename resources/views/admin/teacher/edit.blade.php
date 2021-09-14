@extends('backend.admin.main')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('manage_teacher/' . $dt->id . '/update') }}" method="POST">
            @csrf
            {{ method_field('put') }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Guru</label>
                    <input type="text" name="teacher_name" class="form-control" id="exampleInputEmail1"
                        value="{{ $dt->teacher_name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <select name="gender" class="form-control custom-select">
                        <option selected="" disabled="">---Pilih---</option>
                        <option value="Laki-laki" {{ $dt->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $dt->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Posisi</label>
                    <select name="position_types" class="form-control custom-select">
                        <option selected="" disabled="">---Pilih---</option>
                        <option value="Kepala Prodi" {{ $dt->position_types == 'Kepala Prodi' ? 'selected' : '' }}>
                            Kepala Prodi</option>
                        <option value="Guru RPL" {{ $dt->position_types == 'Guru RPL' ? 'selected' : '' }}>Guru RPL
                        </option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
        </form>
    </div>
@endsection
