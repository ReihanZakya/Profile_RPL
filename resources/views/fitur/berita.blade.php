@extends('template.main6')

@section('content')


<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="{{ url('RPL/berita1') }}"class="link {{ url()->current() == url('RPL/berita1') ? 'active' : '' }}">
    <img src="{{ asset('assets/img/sunburst.png') }}" class="d-block w-100 cover" alt="">
    <div class="carousel-caption borderr">
        <h3>Apa itu SUNBURST?</h3>
      </div>
    </a>
    </div>
    <div class="carousel-item">
    <a href="{{ url('RPL/berita2') }}"class="link {{ url()->current() == url('RPL/berita2') ? 'active' : '' }}">
      <img src="{{ asset('assets/img/hacker4.png') }}" class="d-block w-100 cover" alt="..." >
      <div class="carousel-caption borderr">
        <h3>Bulan-bulanan RI ditangan Peretas</h3>
      </div>
    </a>  
    </div>
    <div class="carousel-item">
    <a href="{{ url('RPL/berita3') }}"class="link {{ url()->current() == url('RPL/berita3') ? 'active' : '' }}">
      <img src="{{ asset('assets/img/hacker3.png') }}" class="d-block w-100 cover" alt="..." >
      <div class="carousel-caption borderr">
        <h3>Hacker China Membobol BNI</h3>
      </div>
    </a>  
    </div>
  </div>
  </div> 
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden ">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden-="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 style="color: orange;">Berita Global</h2>
                    <p>Seputar Rekayasa Perangkat Lunak</p>
                </div>
            </div>

            <div class="container mt-5">
              <div class="row g-3">

                    <div class="col-md-4 col-sm-12 mb-3">
                        <div class="card shadow-sm garis">
                                <img src="{{ asset('assets/img/sunburst.png') }}" class="card-img"  alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="232"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">

                            <div class="card-body">
                                    <h5 class="card-text  warna">Apa Itu "Sunburst"?</h5>
                                    <p class="card-text">
                                    </p>
                                    <!-- <button type="button" class="btn btn-primary">SELENGKAPNYA -->
                                    <button type="button" class="btn btn-dark"><a href="{{ url('RPL/berita1') }}"class="link {{ url()->current() == url('RPL/berita1') ? 'active' : '' }}" style="font-size: 14px; color: orange;">SELENGKAPNYA</button>
                                    <a></a>
                                                      </div>
                                    <div class="modal fade" id="webdeveloper" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                            <div class="col-md-4 col-sm-12 mb-3">
                            <div class="card shadow-sm garis">
                                <img src="{{ asset('assets/img/hacker4.png') }}" alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225" role="img"
                                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">

                                <div class="card-body" >
                                    <h5 class="card-text warna">Bulan-bilanan RI di Tangan Peretas.</h5>
                                    <p class="card-text">

                                    </p>
                                    <button type="button" class="btn btn-dark"><a href="{{ url('RPL/berita2') }}"class="link {{ url()->current() == url('RPL/berita2') ? 'active' : '' }}" style="font-size: 14px; color: orange;">SELENGKAPNYA</button>

                                    <a></a>





                                    <div class="modal fade" id="webdesign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">SELENGKAPNYA</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">


                                                      </div>

                                                    </div>
                                                  </div>
                                                </div>
                                    <div class="d-flex justify-content-between align-items-center">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 mb-3">
                            <div class="card shadow-sm garis">
                                <img src="{{ asset('assets/img/hacker3.png') }}" alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">

                                <div class="card-body">
                                    <h5 class="card-text warna">Hacker China Membobol BIN. </h5>
                                    <p class="card-text">

                                    </p>
                                    <button type="button" class="btn btn-dark"><a href="{{ url('RPL/berita3') }}"class="link {{ url()->current() == url('RPL/berita3') ? 'active' : '' }}" style="font-size: 14px; color: orange;">SELENGKAPNYA</button>

                                    <a></a>



                                    <div class="modal fade" id="hacker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">SELENGKAPNYA</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">


                                                    </div>
                                                  </div>
                                                </div>
                                    <div class="d-flex justify-content-between align-items-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    </div>
                    </div>

@endsection
