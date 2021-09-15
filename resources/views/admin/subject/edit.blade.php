@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('subject/' . $dt->id . '/update') }}" method="POST">
            @csrf
            {{ method_field('put') }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mata Pelajaran</label>
                    <input type="text" name="name_subject" class="form-control" id="exampleInputEmail1"
                        value="Mata Pelajaran Edit">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <select name="class" class="form-control custom-select">
                        <option selected="" disabled="">---Pilih---</option>
                        <option value="Kelas X" {{ $dt->class == 'Kelas X' ? 'selected' : '' }}>Kelas X</option>
                        <option value="Kelas XI" {{ $dt->class == 'Kelas XI' ? 'selected' : '' }}>Kelas XI</option>
                        <option value="Kelas XII" {{ $dt->class == 'Kelas XII' ? 'selected' : '' }}>Kelas XII</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
        </form>
    </div>
@endsection
