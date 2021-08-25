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
            <p>
                RPL adalah singkatan dari Rekayasa Perangkat Lunak dan merupakan sebuah jurusan
                yang ada di Sekolah Menengah Kejuruan (SMK). RPL adalah sebuah jurusan yang mempelajari
                dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen
                organisasi pengembangan perangkat lunak dan manajemen kualitas.
            </p>
        </div>
      </div>
      <h3 class="mt-3 mb-3"><b>Visi & Misi</b></h3>
    <span><i class="fa fa-calendar-alt" style="margin-right: 10px;"></i>Selasa, 22 Agustus 2016</span>

    <div class="col-sm-6">
        <h5 class="mt-4 mb-3"><b>Visi</b></h5>
        <p>
            Menjadi penyelenggara pendidikan kejuruan yang melahirkan tenaga ahli, terampil, kreatif, inovatif
            dan berpengetahuan yang ramah lingkungan di tahun 2025.
        </p>
    </div>
    <div class="col-sm-6">
        <h5 class="mt-4 mb-3"><b>Misi</b></h5>
        <ol>
            <li>Menyelenggarakan pendidikan kejuruan.</li>
            <li>Melahirkan tenaga ahli tingkat menengah.</li>
            <li>Mewujudkan tenaga terampil, kreatif, inovatif dan berpengetahuan.</li>
            <li>Menyiapkan dan melengkapi sarana dan prasarana pendukung pembelajaran berbasis
                ICT dan berwawasan lingkungan.</li>
            <li>Menciptakan suasana lingkungan sekolah yang bersih, hijau, indah dan nyaman.</li>
            <li>Menerapkan perilaku berbudaya lingkungan kepada seluruh warga sekolah dan
                masyarakat sekitar.</li>
        </ol>
    </div>
    </div>
  </section>


@endsection
