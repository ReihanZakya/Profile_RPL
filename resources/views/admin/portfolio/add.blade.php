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
                    <input type="text" name="port_name" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Foto</label>
                    <input type="file" name="photo" class="form-control" id=" formFile">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sumber</label>
                    <input type="text" name="port_source" class="form-control" id="exampleInputEmail1">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
