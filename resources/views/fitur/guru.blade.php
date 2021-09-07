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
                  <h4 style="font-size: 15px;">Raynaldi Syahputra Nonci, S.Pd</h4>
                  <span class="mb-4">Kepala Prodi</span>
                </div>
                <center>
                <button class="btn btn-danger btn-sm btn-pa-rey">Mata Pelajaran</button>
                <hr>
                <div class="container">
            <div id="pa-rey" class="collapse">
              <ul>
              <p><li class="guru">Pemrograman Dasar (KELAS X)</li></p>
              <p><li class="guru">Pemrograman Berorientasi Objek (KELAS XI & XII)</li></p>
              <ul>
            </div>
          </div>
              </center>
              </div>
            </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/pa dede.jpg') }}" class="img-fluid" alt="">
             </div>
            <div class="member-info">
              <h4 style="font-size: 15px;">Dede Suryana, A.md</h4>
              <span class="mb-5">Guru RPL</span>
            </div>
             <center>
                <button class="btn btn-danger btn-sm btn-pa-dede">Mata Pelajaran</button>
                <hr>
                <div class="container">
            <div id="pa-dede" class="collapse">
              <ul>
               <p><li class="guru">Teknik Komputer Jaringan (KELAS X)</li></p>
                <p><li class="guru">Pemodelan Perangkat Lunak (KELAS XI)</li></p>
                <p><li class="guru">Produk Kreatif dan Kewirausahaan (KELAS XI)</li></p>
                <p><li class="guru">Basis Data (KELAS XI)</li></p>
                <ul>
            </div>
          </div>
              </center>
        </div>
    </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/pa hannif.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4 style="font-size: 15px;">Hannif Kurniawan Muttaqin, S.T, M.T</h4>
              <span class="mb-5">Guru RPL</span>
            </div>
             <center>
                <button class="btn btn-danger btn-sm btn-pa-hannif">Mata Pelajaran</button>
                <hr>
                <div class="container">
            <div id="pa-hannif" class="collapse">
              <ul>
              <p><li class="guru">Produk Kreatif dan Kewirusahan (KELAS XII)</li></p>
              <p><li class="guru">Basis Data (KELAS XII)</li></p>
              <ul>
            </div>
          </div>

              </center>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/pa munir.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4 style="font-size: 15px;">Mujahid Munir Muttaqin, S.T</h4>
              <span class="mb-5">Guru RPL</span>
            </div>
            <center>
                <button class="btn btn-danger btn-sm btn-pa-munir">Mata Pelajaran</button>
                <hr>
                <div class="container">
            <div id="pa-munir" class="collapse">
              <ul>
            <p><li class="guru">Pemrograman Web dan Perangkat Bergerak (KELAS XI & XII)</li></p>
            </div>
          </div>
              </center>
          </div>
        </div>

        <div class="col-lg-2  col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="{{ asset('assets/img/team/bu syifa.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4 style="font-size: 15px;">Shyffa Ilmalia Noer Fadillah, S.Kom</h4>
              <span class="mb-5">Guru RPL</span>
            </div>
            <center>
                <button class="btn btn-danger btn-sm btn-bu-syifa">Mata Pelajaran</button>
                <hr>
                <div class="container">
            <div id="bu-syifa" class="collapse">
              <ul>
              <p><li class="guru">Sistem Komputer (KELAS X)</li></p>
              <p><li class="guru">Simulasi Digital (KELAS X)</li></p>
              </ul>
            </div>
          </div>
              </center>
     
  </section>

@endsection
