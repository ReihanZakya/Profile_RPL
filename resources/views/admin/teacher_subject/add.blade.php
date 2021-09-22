@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('teacher_subject/store') }}" method="POST">
            @csrf
            <div class="card-body">
                <label for="exampleInputEmail1">Guru</label><br>
                @foreach ($teacher as $tc)
                <div class="custom-control custom-radio mb-2">
                    <input type="radio" class="custom-control-input @error('teacher_id') is-invalid @enderror"
                        id="customControlValidation{{ $tc->id }}" name="teacher_id" value="{{ $tc->id }}" @if (old('teacher_id') == $tc->id) checked @endif>
                    <label class="custom-control-label" for="customControlValidation{{ $tc->id }}">{{ $tc->name }}</label>
                    @error('teacher_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                @endforeach
                <!-- Mata Pelajaran -->
                <label for="exampleInputEmail1 mt-3">Mata Pelajaran</label><br>
                @foreach ($subject as $sc)
                <div class="custom-control custom-radio mb-2">
                    <input type="radio" class="custom-control-input @error('subject_id') is-invalid @enderror"
                        id="customControlValidation{{ $sc->id+100 }}" name="subject_id" value="{{ $sc->id }}" @if (old('subject_id') == $sc->id) checked @endif>
                    <label class="custom-control-label" for="customControlValidation{{ $sc->id+100 }}">{{ $sc->name }}
                    (@if ($sc->class == 1)
                        Kelas X
                    @elseif ($sc->class == 2)
                        Kelas XI
                    @elseif ($sc->class == 3)
                        Kelas XII
                    @endif)
                </label>
                    @error('subject_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                @endforeach
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </div>
        </form>
    </div>
@endsection
