@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('job_opportunities/' . $dt->id . '/update') }}" method="POST">
            @csrf
            {{ method_field('put') }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tambah Pekerjaan</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="exampleInputEmail1" value="{{ old('name', $dt->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi Pekerjaan</label>
                    <textarea id="summernote" name="description" rows="3"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description', $dt->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@push('summernote')
    <script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- Summernote -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote();
        });
    </script>
@endpush
