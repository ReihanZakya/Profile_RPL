@extends('template.main2')

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
	              <button type="button" class="btn btn-danger" style= "margin-top: 5px;" data-bs-toggle="modal" data-bs-target="#pakrey">
                  Mata Pelajaran
                </button>
                
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
             <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pakdede">
                  Mata Pelajaran                 
              </button>
               
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
             <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pakhanif">
                  Mata Pelajaran
                </button>

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
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pakmunir">
                  Mata Pelajaran
                </button>
                   
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
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#bushyffa">
                  Mata Pelajaran
                </button>
                
              </center>
     
  </section>

@endsection

<!-- Modal Pak Rey-->
<div class="modal fade" id="pakrey" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mengajar</h5>
      </div>
      <div class="modal-body">
      <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mata Pelajaran</th>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Pak dede-->
<div class="modal fade" id="pakdede" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mengajar</h5>
      </div>
      <div class="modal-body">
      <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mata Pelajaran</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Teknik Komputer Jaringan (kelas X)</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Pemodelan Perangkat Lunak (Kelas XI)</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Produk Kreatif dan Kewira usahaan (Kelas XI) </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Basis Data (Kelas XI)</td>
                </tr>
              </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Pak Hanif-->
<div class="modal fade" id="pakhanif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mengajar</h5>
      </div>
      <div class="modal-body">
      <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mata Pelajaran</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Produk Kreatif dan Kewira Usahaan (Kelas XII)</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Basis Data (Kelas XII)</td>
                </tr>
              </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Pak munir-->
<div class="modal fade" id="pakmunir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mengajar</h5>
      </div>
      <div class="modal-body">
      <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mata Pelajaran</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Pemograman Web dan Perangkat Bergerak</td>
                </tr>
              </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal buk shyffa-->
<div class="modal fade" id="bushyffa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mengajar</h5>
      </div>
      <div class="modal-body">
        
      <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Mata Pelajaran</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Sistem Komputer (Kelas X)</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Simulasi Digital (Kelas X)</td>
                </tr>
              </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>



