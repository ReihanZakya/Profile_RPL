@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('teacher_subject/store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Guru</label>
                    <select name="teacher_id" class="form-control custom-select">
                        <option selected="" disabled="">---Pilih Guru---</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mata Pelajaran</label>
                    <select name="subject_id" class="form-control custom-select">
                        <option selected="" disabled="">---Pilih Mata Pelajaran---</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
