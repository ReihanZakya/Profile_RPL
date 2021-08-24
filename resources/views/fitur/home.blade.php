@extends('template.main')

@section('content')

<section id="features" class="features">
    <div class="container mt-5" data-aos="fade-up">

      <div class="row">
        <div class="image col-lg-6 komputer" data-aos="fade-right">
        <img src="{{ asset('assets/img/home/komputer.jpg') }}" style="width: 500px;" class="img-fluid" alt="...">
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
          <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <h4 class="mb-5">Apa itu jurusan RPL</h4>
            <p class="text-left">
                RPL adalah singkatan dari Rekayasa Perangkat Lunak dan merupakan sebuah jurusan
                yang ada di Sekolah Menengah Kejuruan (SMK). RPL adalah sebuah jurusan yang mempelajari
                dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen
                organisasi pengembangan perangkat lunak dan manajemen kualitas.
            </p>
        </div>
      </div>

    </div>
  </section>


@endsection
