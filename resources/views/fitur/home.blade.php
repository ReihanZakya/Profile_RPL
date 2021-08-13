@extends('template.main')

@section('halaman home')

<section id="features" class="features">
    <div class="container mt-5" data-aos="fade-up">

      <div class="row">
        <div class="image col-lg-6" style='background-image: url("assets/img/home/komputer.jpg");' data-aos="fade-right"></div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
          <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <h4 class="mb-5">Apa itu jurusan RPL</h4>
            <p>
                RPL adalah singkatan dari Rekayasa Perangkat Lunak dan merupakan sebuah jurusan
                yang ada di Sekolah Menengah Kejuruan (SMK). RPL adalah sebuah jurusan yang mempelajari
                dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen
                organisasi pengembangan perangkat lunak dan manajemen kualitas.
            </p>
        </div>
      </div>

    </div>
  </section>

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 content" data-aos="fade-left" data-aos-delay="100">
          <img src="{{asset('assets/img/home/belajar.jpeg')}}" class="img-fluid" alt="" >
          <ul class="mt-3">
          <h4 class="">Kelas XII</h4>
            <li><i class="ri-check-double-line"></i> Pemrograman Web dan Perangkat Bergerak.</li>
            <li><i class="ri-check-double-line"></i> Basis Data.</li>
            <li><i class="ri-check-double-line"></i> Produk Kreatif dan Kewirausahaan.</li>
            <li><i class="ri-check-double-line"></i> Pemrograman Berorientasi Objek.</li>
        </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h3>Pembelajaran jurusan RPL</h3>
          <ul class="mt-3">
            <h4>Kelas X</h4>
            <li><i class="ri-check-double-line"></i> Pemrograman Dasar.</li>
            <li><i class="ri-check-double-line"></i> Teknik Komputer Jaringan.</li>
            <li><i class="ri-check-double-line"></i> Sistem Komputer.</li>
            <li><i class="ri-check-double-line"></i> Simulasi Digital.</li>
            <h4>Kelas XI</h4>
            <li><i class="ri-check-double-line"></i> Pemrograman Web dan Perangkat Bergerak.</li>
            <li><i class="ri-check-double-line"></i> Basis Data.</li>
            <li><i class="ri-check-double-line"></i> Produk Kreatif dan Kewirausahaan.</li>
            <li><i class="ri-check-double-line"></i> Pemrograman Berorientasi Objek.</li>
            <li><i class="ri-check-double-line"></i> Permodelan Perangkat Lunak.</li>

          </ul>
        </div>
      </div>

    </div>
  </section>



@endsection
