@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('portfolio/' . $dt->id . '/update') }}" method="POST" enctype="multipart/form-data">
            {{ method_field('put') }}
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="exampleInputEmail1" value="{{ old('name', $dt->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Anggota -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Anggota</label>
                    <input type="hidden" name="old_member_id" value="{{ $hidden->member_id }}">
                    <select class="form-control custom-select @error('member_id') is-invalid @enderror" name="member_id"
                        id="exampleFormControlSelect1">
                        <option selected="" disabled="">Pilih Anggota</option>
                        @foreach ($member as $mb)
                            <option value="{{ $mb->id }}"
                                {{ collect(old('member_id', $dt->member_id))->contains($mb->id) ? 'selected' : '' }}>
                                {{ $mb->member_name }}</option>
                        @endforeach
                    </select>
                    @error('member_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Sumber</label>
                    <input type="text" name="source" class="form-control @error('source') is-invalid @enderror"
                        id="exampleInputEmail1" value="{{ old('source', $dt->source) }}" value="{{ old('source') }}">
                    @error('source')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!--Foto-->
                <label for="exampleFormControlFile1">Foto</label>
                @if ($dt->photo)
                    <img src="{{ asset('AdminLTE/portfolio/' . $dt->photo) }}"
                        class="img-preview card-img-top col-sm-5 mb-3 d-block" style="width: 20%; heigt: 2 0%;">
                @else
                    <img class="img-preview card-img-top col-sm-5 mb-3 " style="width: 20%; heigt: 20%;">
                @endif
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input @error('photo') is-invalid @enderror"
                            id="image" onchange="previewImage()" aria-describedby="inputGroupFileAddon03">
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
