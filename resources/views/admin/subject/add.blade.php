@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('subject/store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mata Pelajaran</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="exampleInputEmail1" value="{{ old('name') }}" autocomplete="off">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <label for="exampleInputEmail1">Kelas</label><br>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input @error('class') is-invalid @enderror"
                        id="customControlValidation1" name="class" value="1" @if (old('class') == 1) checked @endif>
                    <label class="custom-control-label" for="customControlValidation1">Kelas X</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input @error('class') is-invalid @enderror"
                        id="customControlValidation2" name="class" value="2" @if (old('class') == 2) checked @endif>
                    <label class="custom-control-label" for="customControlValidation2">Kelas XI</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input @error('class') is-invalid @enderror"
                        id="customControlValidation3" name="class" value="3" @if (old('class') == 3) checked @endif>
                    <label class="custom-control-label" for="customControlValidation3">Kelas XII</label>
                    @error('class')
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
