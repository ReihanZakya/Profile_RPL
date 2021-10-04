@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('position_types/' . $dt->id . '/update') }}" method="POST">
            @csrf
            {{ method_field('put') }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Posisi</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="exampleInputEmail1" value="{{ old('name', $dt->name) }}" autocomplete="off">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                 @if ($unique1 == '1')

                @else
                    <label for="exampleInputEmail1">Apakah jenis posisi ini bisa lebih dari satu ?</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input @error('is_unique') is-invalid @enderror"
                            id="customControlValidation1" name="is_unique" value="1" @if (old('is_unique') == 1) @endif required>
                        <label class="custom-control-label" for="customControlValidation1">Ya</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input @error('is_unique') is-invalid @enderror"
                            id="customControlValidation2" name="is_unique" value="0" @if (old('is_unique') == 0) @endif required>
                        <label class="custom-control-label" for="customControlValidation2">Tidak</label>
                    </div>
                @endif
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
