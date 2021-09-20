@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('subject/'.$dt->id.'/update') }}" method="POST">
            @csrf
            {{ method_field('put') }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mata Pelajaran</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $dt->name }}">
                </div>
                <label for="exampleInputEmail1">Kelas</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="class" id="Laki-laki" value="1" {{ ($dt->class == 1) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Laki-laki">Kelas X</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="class" id="Perempuan" value="2" {{ ($dt->class == 2) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Perempuan">Kelas XI</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="class" id="Perempuan" value="3" {{ ($dt->class == 3) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Perempuan">Kelas XII</label>
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
