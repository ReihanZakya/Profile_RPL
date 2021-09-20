@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('teacher_subject/'.$dt->id.'/update') }}" method="POST">
            @csrf
            {{ method_field('put') }}
            <div class="card-body">
                <label for="exampleInputEmail1">Guru</label><br>
                @foreach ($teacher as $tc)
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="teacher_id" id="teacher" value="{{ $tc->id }}"
                    {{ ($tc->id == $dt->teacher_id) ? 'checked' : '' }}>
                    <label class="form-check-label" for="teacher">{{ $tc->name }}</label>
                </div><br>
                @endforeach
                <label for="exampleInputEmail1">Mata Pelajaran</label><br>
                @foreach ($subject as $sc)
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="subject_id" id="subject" value="{{ $sc->id }}"
                    {{ ($sc->id == $dt->subject_id) ? 'checked' : '' }}>
                    <label class="form-check-label" for="subject">{{ $sc->name }}
                        ( @if ($sc->class == 1)
                        <td>Kelas X</td>
                        @elseif ($sc->class == 2)
                            <td>Kelas XI</td>
                        @elseif ($sc->class == 3)
                            <td>Kelas XII</td>
                        @endif)
                    </label>
                </div><br>
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
