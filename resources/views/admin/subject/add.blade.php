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
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                </div>
                <label for="exampleInputEmail1">Kelas</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="class" id="Laki-laki" value="1">
                    <label class="form-check-label" for="Laki-laki">Kelas X</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="class" id="Perempuan" value="2">
                    <label class="form-check-label" for="Perempuan">Kelas XI</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="class" id="Perempuan" value="3">
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
