@extends('template.main')

@section('halaman test')

<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Check our Portfolio</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
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
              <p>Berbagi Bersama</p>
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
              <p>Berbagi Bersama</p>
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
              <p>Mahaputra Peduli</p>
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
              <p>Mahaputra peduli</p>
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
              <p>Kebersihan</p>
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
              <p>Kebersihan</p>
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
              <p>Protokol Kesehatan</p>
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
              <p>Protokol Kesehatan</p>
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
              <p>Protokol Kesehatan</p>
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
              <p>Protokol Kesehatan</p>
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
              <p>Protokol Kesehatan</p>
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


@endsection
