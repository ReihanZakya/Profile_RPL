@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('teacher_subject/store') }}" method="POST">
            @csrf
            <div class="card-body">
                <!-- GURU -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Guru</label>
                    <select class="form-control custom-select @error('teacher_id') is-invalid @enderror" name="teacher_id" id="exampleFormControlSelect1">
                      <option selected="" disabled="">Pilih Guru</option>
                        @foreach ($teacher as $tc)
                            <option value="{{ $tc->id }}" {{ old('teacher_id') == $tc->id ? 'selected' : '' }}>{{ $tc->name }}</option>
                        @endforeach
                    </select>
                    @error('teacher_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                  </div>

                <!-- Mata Pelajaran -->
                <div class="form-group">
                <label for="exampleFormControlSelect2">Mata Pelajaran</label>
                <!-- <select multiple class="form-control custom-select @error('subject_id') is-invalid @enderror" name="subject_id[]" id="exampleFormControlSelect2">
                    @foreach ($subject as $sc)
                        <option value="{{ $sc->id }}" {{ (collect(old('subject_id'))->contains($sc->id)) ? 'selected' : '' }}>{{ $sc->name }} (@if ($sc->class == 1)
                            Kelas X
                        @elseif ($sc->class == 2)
                            Kelas XI
                        @elseif ($sc->class == 3)
                            Kelas XII
                        @endif)</option>
                    @endforeach
                  </select> -->
                  <select class="form-control custom-select @error('subject_id') is-invalid @enderror" name="subject_id" id="exampleFormControlSelect1">
                      <option selected="" disabled="">Pilih Mata Pelajaran</option>
                        <!-- @foreach ($subject as $sc)
                        <option value="{{ $sc->id }}" {{ (collect(old('subject_id'))->contains($sc->id)) ? 'selected' : '' }}>{{ $sc->name }} </option>
                            <option value="{{ $sc->id }}" {{ old('subject_id') == $sc->id ? 'selected' : '' }}>{{ $sc->name }}</option>
                        @endforeach -->

                        @foreach ($subject as $sc)
                          <option value="{{ $sc->id }}">{{ $sc->name }}</option>
                        @endforeach
                    </select>
                  @error('subject_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
