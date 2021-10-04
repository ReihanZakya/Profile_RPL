@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('portfolio/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <!-- Nama -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="exampleInputEmail1" value="{{ old('name') }}" value="{{ old('name') }}" autocomplete="off">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Sumber -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Sumber</label>
                    <input type="text" name="source" class="form-control @error('source') is-invalid @enderror"
                        id="exampleInputEmail1" value="{{ old('source') }}" value="{{ old('source') }}"
                        autocomplete="off">
                    @error('source')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!--Foto-->
                <label for="exampleFormControlFile1">Foto</label>
                <img class="img-preview card-img-top col-sm-5 mb-3 " style="width: 20%; heigt: 20%;">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input @error('photo') is-invalid @enderror"
                            id="image" onchange="previewImage()" aria-describedby="inputGroupFileAddon03">
                        <label class="custom-file-label" for="inputGroupFile03">Choose File</label>
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
