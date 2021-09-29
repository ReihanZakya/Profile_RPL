@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('teacher/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <!--Nama-->
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Guru</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="exampleInputEmail1" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <!-- Jenis Kelamin-->
                <label for="exampleInputEmail1">Jenis Kelamin</label><br>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input @error('gender') is-invalid @enderror"
                        id="customControlValidation1" name="gender" value="1" checked @if (old('gender') == 1) checked @endif>
                    <label class="custom-control-label" for="customControlValidation1">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input @error('gender') is-invalid @enderror"
                        id="customControlValidation2" name="gender" value="2" @if (old('gender') == 2) checked @endif>
                    <label class="custom-control-label" for="customControlValidation2">Perempuan</label>
                    @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <!-- Jenis Posisi-->
                <label for="exampleInputEmail1" class="mt-3">Jenis Posisi</label><br>
                @if (isset($unique->is_unique))
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input @error('position_types') is-invalid @enderror"
                        id="customControlValidation4" name="position_types" value="2" checked @if (old('position_types') == 2) checked @endif>
                    <label class="custom-control-label" for="customControlValidation4">Guru RPL</label>
                    @error('position_types')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                @else
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input @error('position_types') is-invalid @enderror"
                    id="customControlValidation3" name="position_types" value="1" checked @if (old('position_types') == 1) checked @endif>
                    <label class="custom-control-label" for="customControlValidation3">Kepala Prodi</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input @error('position_types') is-invalid @enderror"
                        id="customControlValidation4" name="position_types" value="2" @if (old('position_types') == 2) checked @endif>
                    <label class="custom-control-label" for="customControlValidation4">Guru RPL</label>
                    @error('position_types')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                @endif
                <!--Foto-->
                <label for="exampleFormControlFile1">Foto</label>
                <img  class="img-preview card-img-top col-sm-5 mb-3 " style="width: 20%; heigt: 20%;">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input @error('photo') is-invalid @enderror" id="image" onchange="previewImage()"
                            aria-describedby="inputGroupFileAddon03" value="{{ old('photo') }}">
                        <label class="custom-file-label" for="inputGroupFile03">Choose File</label>
                    </div>
                </div>
                @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
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

    {{-- preview img --}}
    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        };
    </script>
@endpush
