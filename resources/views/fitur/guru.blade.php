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
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{ asset('assets/img/team/pa rey.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Raynaldi Syahputra Nonci, S.Pd</h4>
                  <span class="mb-4">Kepala Prodi</span>
                </div>
                <center>
                <button class="btn btn-danger btn-sm btn-pa-rey">Mata Pelajaran</button>
                <hr>
              </center>
              </div>
            </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/pa dede.jpg') }}" class="img-fluid" alt="">
             </div>
            <div class="member-info">
              <h4>Dede Suryana, A.md</h4>
              <span class="mb-5">Guru RPL</span>
            </div>
             <center>
                <button class="btn btn-danger btn-sm btn-pa-dede">Mata Pelajaran</button>
                <hr>
              </center>
        </div>
    </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/pa hannif.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Hannif Kurniawan Muttaqin, S.T, M.T</h4>
              <span class="mb-5">Guru RPL</span>
            </div>
             <center>
                <button class="btn btn-danger btn-sm btn-pa-hannif">Mata Pelajaran</button>
                <hr>
              </center>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/pa munir.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Mujahid Munir Muttaqin, S.T</h4>
              <span class="mb-5">Guru RPL</span>
            </div>
            <center>
                <button class="btn btn-danger btn-sm btn-pa-munir">Mata Pelajaran</button>
                <hr>
              </center>
          </div>
        </div>

        <div class="col-lg-2  col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/bu syifa.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Shyffa Ilmalia Noer Fadillah, S.Kom</h4>
              <span class="mb-5">Guru RPL</span>
            </div>
            <center>
                <button class="btn btn-danger btn-sm btn-bu-syifa">Mata Pelajaran</button>
                <hr>
              </center>
        </div>
        </div>

          <div class="container">
            <div id="pa-rey" class="collapse">
              <p>Pemrograman Dasar (KELAS X)</p>
              <p>Pemrograman Berorientasi Objek (KELAS XI & XII)</p>
            </div>
          </div>

          <div class="container">
            <div id="pa-dede" class="collapse">
               <p>Teknik Komputer Jaringan (KELAS X)</p>
                <p>Pemodelan Perangkat Lunak (KELAS XI)</p>
                <p>Produk Kreatif dan Kewirausahaan (KELAS XI)</p>
                <p>Basis Data (KELAS XI)</p>
            </div>
          </div>

          <div class="container">
            <div id="pa-hannif" class="collapse">
              <p>Produk Kreatif dan Kewirusahan (KELAS XII)</p>
              <p>Basis Data (KELAS XII)</p>
            </div>
          </div>

          <div class="container">
            <div id="pa-munir" class="collapse">
              <p>Pemrograman Web dan Perangkat Bergerak (KELAS XI & XII)</p>
            </div>
          </div>

          <div class="container">
            <div id="bu-syifa" class="collapse">
              <p>Sistem Komputer (KELAS X)</p>
              <p>Simulasi Digital (KELAS X)</p>
            </div>
          </div>

    </div>
  </section>

@endsection
