@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('teacher/' . $dt->id . '/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="card-body">
                <!--Nama-->
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Guru</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="exampleInputEmail1" value="{{ old('name', $dt->name) }}" autocomplete="off">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Jenis Kelamin-->
                <label for="exampleInputEmail1">Jenis Kelamin</label><br>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input @error('gender') is-invalid @enderror"
                        id="customControlValidation1" name="gender" value="1" checked @if (old('gender', $dt->gender) == 1) checked @endif>
                    <label class="custom-control-label" for="customControlValidation1">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input @error('gender') is-invalid @enderror"
                        id="customControlValidation2" name="gender" value="2" @if (old('gender', $dt->gender) == 2) checked @endif>
                    <label class="custom-control-label" for="customControlValidation2">Perempuan</label>
                    @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Jenis Posisi -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="mt-3">Jenis Posisi</label>
                    <select class="form-control select2  @error('position_types_id') is-invalid @enderror"
                        name="position_types_id" style="width: 100%">
                        @foreach ($position as $ps)
                            <option value="{{ $ps->id }}"
                                {{ old('position_types_id', $dt->position_types_id) == $ps->id ? 'selected' : '' }}>
                                {{ $ps->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('position_types_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!--Foto-->
                <label for="exampleFormControlFile1" class="mt-2">Foto</label>
                <input type="hidden" name="old_photo" value="{{ $dt->photo }}">
                @if ($dt->photo)
                    <img src="{{ asset('AdminLTE/teacher/' . $dt->photo) }}"
                        class="img-preview card-img-top col-sm-5 mb-3 d-block" style="width: 20%; heigt: 2 0%;">
                @else
                    <img class="img-preview card-img-top col-sm-5 mb-3 " style="width: 20%; heigt: 20%;">
                @endif
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input @error('photo') is-invalid @enderror"
                            id="image" onchange="previewImage()" aria-describedby="inputGroupFileAddon03"
                            value="{{ old('photo') }}">
                        <label class="custom-file-label" for="inputGroupFile03">Pilih Foto</label>
                    </div>
                </div>
                @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
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

    {{-- preview img --}}
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        };
    </script>
@endpush
@push('select2')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Select2 -->
    <script src="{{ asset('AdminLTE/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap4',
            });
        });
    </script>
@endpush
