@extends('backend.admin.dashboard')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form action="{{ url('portfolio_member/'.$dt->id.'/update') }}" method="POST">
            @csrf
            {{ method_field('put') }}
            <div class="card-body">
                <!-- Portofolio -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Portofolio</label>
                    <select class="form-control custom-select @error('portfolio_id') is-invalid @enderror" name="portfolio_id" id="exampleFormControlSelect1">
                      <option selected="" disabled="">---Pilih Portofolio---</option>
                        @foreach ($portfolio as $pt)
                            <option value="{{ $pt->id }}" {{ old('portfolio_id',$dt->portfolio_id) == $pt->id ? 'selected' : '' }}>{{ $pt->name }}</option>
                        @endforeach
                    </select>
                    @error('portfolio_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                  </div>

                <!-- Anggota Portofolio -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Anggota</label>
                    <select class="form-control custom-select @error('member_id') is-invalid @enderror" name="member_id" id="exampleFormControlSelect1">
                      <option selected="" disabled="">---Pilih Anggota---</option>
                        @foreach ($member as $mb)
                            <option value="{{ $mb->id }}" {{ old('member_id',$dt->member_id) == $mb->id ? 'selected' : '' }}>{{ $mb->member_name }}</option>
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
