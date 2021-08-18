@extends('template.main')

@section('halaman test')

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
              <span>Kepala Prodi</span>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
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
              <span>Guru RPL</span>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
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
              <span>Guru RPL</span>
            </div>
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
              <span>Guru RPL</span>
            </div>
          </div>
        </div>
        <div class="col-lg-2  col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
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
              <span>Guru RPL</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


@endsection
