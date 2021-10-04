@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('portfolio_member/store') }}" method="POST">
            @csrf
            <div class="card-body">
                <!-- Portofolio -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Portofolio</label>
                    <select class="form-control select2  @error('member_id') is-invalid @enderror" name="portfolio_id"
                        style="width: 100%">
                        <option selected="" disabled="">Pilih Portofolio</option>
                        @foreach ($portfolio as $pt)
                            <option value="{{ $pt->id }}" {{ old('member_id') == $pt->id ? 'selected' : '' }}>
                                {{ $pt->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('portfolio_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Anggota -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="mt-3">Aggota</label>
                    <select class="form-control select2  @error('member_id') is-invalid @enderror" name="member_id[]"
                        style="width: 100%" data-placeholder="Pilih Anggota" multiple>
                        @foreach ($member as $mb)
                            <option value="{{ $mb->id }}" {{ old('member_id') == $mb->id ? 'selected' : '' }}>
                                {{ $mb->member_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('member_id')
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
