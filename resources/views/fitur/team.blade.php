@extends('template.main')

@section('content')

<section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>Guru Rekayasa Perangkat Lunak</p>
      </div>

      <div class="row justify-content-center">

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
              <span class="mb-5">Kepala Prodi</span>
            </div>
            <center>
                <button class="btn btn-danger btn-sm" type="button"
                data-bs-toggle="collapse" data-bs-target="#pa-dede" aria-expanded="false" aria-controls="collapseExample">
                    Mata Pelajaran
                </button>
                <hr>
            </center>
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
            <center>
                <button class="btn btn-danger btn-sm" type="button"
                data-bs-toggle="collapse" data-bs-target="#pa-hannif" aria-expanded="false" aria-controls="collapseExample">
                    Mata Pelajaran
                </button>
                <hr>
            </center>
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
            <center>
                <button class="btn btn-danger btn-sm " type="button"
                data-bs-toggle="collapse" data-bs-target="#pa-munir" aria-expanded="false" aria-controls="collapseExample">
                    Mata Pelajaran
                </button>
                <hr>
            </center>
          </div>

        </div>

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
              <span class="mb-4">Guru RPL</span>
            </div>
            <center>
                <button class="btn btn-danger btn-sm" type="button"
                data-bs-toggle="collapse" data-bs-target="#pa-rey" aria-expanded="false" aria-controls="collapseExample">
                    Mata Pelajaran
                </button>
                <hr>
            </center>
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
            <center>
                <button class="btn btn-danger btn-sm" type="button"
                data-bs-toggle="collapse" data-bs-target="#bu-syifa" aria-expanded="false" aria-controls="collapseExample">
                    Mata Pelajaran
                </button>
                <hr>
            </center>
        </div>
        </div>

      </div>

      <div class="collapse mt-3" id="pa-dede">
          <div class="card card-body">
              <ul>
                  <li>Teknik Komputer Jaringan (KELAS X)</li>
                  <li>Pemodelan Perangkat Lunak (KELAS XI)</li>
                  <li>Produk Kreatif dan Kewirausahaan (KELAS XI)</li>
                  <li>Basis Data (KELAS XI)</li>
                </ul>
            </div>
        </div>

        <div class="collapse mt-3" id="pa-hannif">
            <div class="card card-body">
                <ul>
                    <li>Produk Kreatif dan Kewirausahaan (KELAS XII)</li>
                    <li>Basis Data (KELAS XII)</li>
                </ul>
            </div>
        </div>

        <div class="collapse mt-3" id="pa-munir">
            <div class="card card-body">
                <ul>
                    <li>Pemrograman Web dan Perangkat Bergerak (KELAS XI & XII)</li>
                </ul>
            </div>
        </div>


        <div class="collapse mt-3" id="pa-rey">
            <div class="card card-body">
                <ul>
                    <li>Pemrograman Dasar (KELAS X)</li>
                    <li>Pemrograman Berorientasi Objek (KELAS XI & XII)</li>
                </ul>
            </div>
        </div>

        <div class="collapse mt-3" id="bu-syifa">
          <div class="card card-body">
             <ul>
                 <li>Sistem Komputer (KELAS X)</li>
                 <li>Simulasi Digital (KELAS X)</li>
             </ul>
          </div>
        </div>

    </div>
</section>


@endsection
