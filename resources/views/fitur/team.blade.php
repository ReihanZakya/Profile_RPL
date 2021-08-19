@extends('template.main')

@section('content')

<section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tim</h2>
        <p>Guru Rekayasa Perangkat Lunak</p>
      </div>

      <div class="row justify-content-center">

      <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                  <img src="{{ asset('assets/img/team/pa rey.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Raynaldi Syahputra Nonci, S.Pd</h4>
                  <span class="mb-4">Kepala Prodi</span>
                </div>
              </div>
            </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/pa dede.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
             </div>
            <div class="member-info">
              <h4>Dede Suryana, A.md</h4>
              <span class="mb-5">Guru RPL</span>
            </div>
        </div>
    </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/pa hannif.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Hannif Kurniawan Muttaqin, S.T, M.T</h4>
              <span class="mb-2">Guru RPL</span>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/pa munir.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Mujahid Munir Muttaqin, S.T</h4>
              <span class="mb-5">Guru RPL</span>
            </div>
          </div>
        </div>

        <div class="col-lg-2  col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/bu syifa.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Shyffa Ilmalia Noer Fadillah, S.Kom</h4>
              <span class="mb-4">Guru RPL</span>
            </div>
        </div>
        </div>

        <label for="" class="label bg-danger text-center text-white col-md-3 mb-5">Mata Pelajaran</label>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Raynaldi Syahputra Nonci, S.Pd
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Pemrograman Dasar (KELAS X)</p>
                  <p>Pemrograman Berorientasi Objek (KELAS XI & XII)</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                 Dede Suryana, A.md
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>Teknik Komputer Jaringan (KELAS X)</p>
                <p>Pemodelan Perangkat Lunak (KELAS XI)</p>
                <p>Produk Kreatif dan Kewirausahaan (KELAS XI)</p>
                <p>Basis Data (KELAS XI)</p>
              </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Hannif Kurniawan Muttaqin, S.T, M.T
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Produk Kreatif dan Kewirusahan (KELAS XII)</p>
                  <p>Basis Data (KELAS XII)</p>
                </div>
              </div>
            </div>

             <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                  Mujahid Munir Muttaqin, S.T
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Pemrograman Web dan Perangkat Bergerak (KELAS XI & XII)</p>
                </div>
              </div>
            </div>

             <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                  Shyffa Ilmalia Noer Fadillah, S.Kom
                </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                 <p>Sistem Komputer (KELAS X)</p>
                 <P>Simulasi Digital (KELAS X)</P>
                </div>
              </div>
            </div>
          </div>
      </div>
</section>


@endsection
