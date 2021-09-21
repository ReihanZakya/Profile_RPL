@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('portfolio/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Portofolio</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sumber</label>
                    <input type="text" name="source" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kelompok</label>
                    <input type="text" name="source" class="form-control" id="exampleInputEmail1">
                </div>
                   <!--Foto-->
                   <label for="exampleFormControlFile1">Foto</label>
                   <div class="input-group mb-3">
                       <div class="custom-file">
                           <input type="file" name="photo" class="custom-file-input" id="inputGroupFile03"
                               aria-describedby="inputGroupFileAddon03">
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
@endpush
