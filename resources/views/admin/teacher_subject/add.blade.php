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
                    <select class="form-control select2  @error('teacher_id') is-invalid @enderror" name="teacher_id"
                        style="width: 100%">
                        <option selected="" disabled="">Pilih Guru</option>
                        @foreach ($teacher as $tc)
                            <option value="{{ $tc->id }}" {{ old('teacher_id') == $tc->id ? 'selected' : '' }}>
                                {{ $tc->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('teacher_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Mata Pelajaran -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="mt-3">Mata Pelajaran</label>
                    <select class="form-control select2  @error('subject_id') is-invalid @enderror" name="subject_id[]"
                        style="width: 100%" data-placeholder="Pilih Mata Pelajaran" multiple>
                        @foreach ($subject as $sj)
                            <option value="{{ $sj->id }}" {{ old('subject_id') == $sj->id ? 'selected' : '' }}>
                                {{ $sj->name }} (@if ($sj->class == 1)
                                    Kelas X
                                @elseif ($sj->class == 2)
                                    Kelas XI
                                @elseif ($sj->class == 3)
                                    Kelas XII
                                @endif)
                            </option>
                        @endforeach
                    </select>
                    @error('subject_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- /.card-body -->

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
@push('select2')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Select2 -->
    <script src="{{ asset('AdminLTE/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap4',
            });
        });
    </script>
@endpush
