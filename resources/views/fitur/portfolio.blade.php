@extends('template.main')

@section('content')

<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Dokumentasi</h2>
        <p>Dokumentasi Foto-Foto</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-kegiatan" class="filter-active">Kegiatan Sekolah</li>
            <li data-filter=".filter-fasilitas" class="filter-active">Fasilitas</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-fasilitas">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/fasilitas/gerbang.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Gerbang Masuk</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/fasilitas/gerbang.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fasilitas">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/fasilitas/lapangan.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Lapangan</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/fasilitas/lapangan.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fasilitas">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/fasilitas/jabon.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Jabon</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/fasilitas/jabon.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fasilitas">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/fasilitas/balema.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Balema</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/fasilitas/balema.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fasilitas">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/fasilitas/hanggar.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Hanggar</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/fasilitas/hanggar.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fasilitas">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/fasilitas/masjid.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Masjid</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/fasilitas/mesjid.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fasilitas">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/fasilitas/perpustakaan.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Perpustakaan</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/fasilitas/perpustakaan.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fasilitas">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/fasilitas/ruangguru.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Ruang Guru</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/fasilitas/ruangguru.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-fasilitas">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/fasilitas/lab.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Lab</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/fasilitas/lab.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-kegiatan">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/Kegiatan/Kegiatan1.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Kegiatan Sekolah</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/Kegiatan/Kegiatan1.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-kegiatan">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/Kegiatan/Kegiatan2.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Kegiatan Sekolah</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/Kegiatan/Kegiatan2.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/smkmahaputracerdasutama/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Portofolio</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Semua</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-fasilitas ">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/project/kelompok2.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p>Kelompok 2</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/project/kelompok2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/SantiSintia/2020_XII_RPL_KELOMPOK_2.git" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section>

@endsection
