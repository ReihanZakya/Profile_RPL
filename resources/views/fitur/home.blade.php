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
      <div class="container mt-4">
          <h4 class="text-center mb-3"><strong>Visi Misi</strong></h4>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                  <li class="nav-item">
                  <button type="button" class="nav-link active visi text-dark">Visi</button>
                  </li>
                  <li class="nav-item">
                <button type="button" class="nav-link misi text-dark">Misi</button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                 <div class="tab-content mt-3">
                  <div class="tab-pane active" id="visi" role="tabpanel">
                    <p class="card-text">Menjadi penyelenggara pendidikan kejuruan yang melahirkan tenaga ahli, terampil,
                        kreatif, inovatif dam berpengetahuan yang ramah lingkungan di tahun 2025. </p>
                  </div>

                  <div class="tab-pane" id="misi" role="tabpanel" aria-labelledby="history-tab">
                    <p class="card-text">
                        <ol>
                            <li>Menyelenggarakan pendidikan kejujuran.</li>
                            <li>Melahirkan tenaga ahli tingkat menegah.</li>
                            <li>Mewujudkan tenaga terampil, kreatif, inovatif dan berpengetahuan.</li>
                            <li>Menyiapkan dan melengkapi sarana dan prasarana pendukung pembelajaran
                                berbasis ICT dan berwawasan lingkungan.</li>
                            <li>Menciptakan suasana lingkungan sekolah yang bersih, hijau, indah dan nyaman.</li>
                            <li>Menerapkan perilaku berbudaya lingkungan kepada seluruh warga sekolah
                                dan masyarakat sekitar.</li>
                        </ol>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


@endsection
