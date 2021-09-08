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
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mengajar</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Pemrograman Dasar (KELAS X)</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Pemrograman Berorientasi Objek (KELAS XI & XII)</td>
                </tr>
              </tbody>
            </table>
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
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mengajar</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Teknik Komputer Jaringan (KELAS X)</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Pemodelan Perangkat Lunak (KELAS XI)</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Produk Kreatif dan Kewirausahaan (KELAS XI)</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Basis Data (KELAS XI)</td>
                </tr>
              </tbody>
            </table>
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
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mengajar</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Produk Kreatif dan Kewirusahan (KELAS XII)</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Basis Data (KELAS XII)</td>
                </tr>
            </table>
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
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mengajar</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Pemrograman Web dan Perangkat Bergerak (KELAS XI & XII)</td>
                </tr>
            </table>
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
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mengajar</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Sistem Komputer (KELAS X)</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Simulasi Digital (KELAS X)</td>
                </tr>
            </table>
            </div>
          </div>
              </center>
     
  </section>

@endsection
