@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('teacher/'.$dt->id.'/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="card-body">
                <!--Nama-->
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Guru</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        value="{{ $dt->name }}">
                </div>
                <!-- Jenis Kelamin-->
                <label for="exampleInputEmail1">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="Laki-laki" value="1" {{ ($dt->gender == "1") ? "checked" : "" }}>
                    <label class="form-check-label" for="Laki-laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="Perempuan" value="2" {{ ($dt->gender == '2') ? 'checked' : '' }}>
                    <label class="form-check-label" for="Perempuan">Perempuan</label>
                </div><br>
                <!-- Jenis Posisi-->
                <label for="exampleInputEmail1" class="mt-3 mb-2">Jenis Posisi</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="position_types" id="Kepala Prodi" value="1" {{ ($dt->position_types == '1') ? 'checked' : '' }}>
                    <label class="form-check-label" for="Kepala Prodi">Kepala Prodi</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="position_types" id="Guru RPL" value="2" {{ ($dt->position_types == '2') ? 'checked' : '' }}>
                    <label class="form-check-label" for="Guru RPL">Guru RPL</label>
                </div><br>
                <!--Foto-->
                <label for="exampleFormControlFile1">Photo</label>
                <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" name="photo" class="custom-file-input" id="inputGroupFile03"
                                aria-describedby="inputGroupFileAddon03" value="{{ $dt->photo }}">
                            <label class="custom-file-label" for="inputGroupFile03">{{ $dt->photo }}</label>
                        </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </div>
        </form>
    </div>
@endsection


@push('form')
    <script src="{{ asset('AdminLTE/photojs/bs-custom-file-input.js') }}"></script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init()
            $("#inputFile").change(function(event) {
                fadeInAdd();
                getURL(this);
            });
        });
    </script>
@endpush
