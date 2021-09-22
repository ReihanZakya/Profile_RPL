@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('job_opportunities/' . $dt->id . '/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tambah Pekerjaan</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                    value="{{ old('name',$dt->name) }}">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi Pekerjaan</label>
                    <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror">
                        {{ old('description',$dt->description) }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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
