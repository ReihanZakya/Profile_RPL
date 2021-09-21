@extends('template.main5')

@section('content')

    <section id="features" class="features">
        <div class="container mt-5" data-aos="fade-up">

            <div class="row">
                <h4 class="text-center mb-5"><strong>Peluang kerja lulusan jurusan RPL</strong></h4>
                <div class="image col-lg-6" data-aos="fade-right">
                    <img src="{{ asset('assets/img/home/peluangkerja.jpg') }}" class="img-fluid" alt=""
                        style="width: 550px;" height="400px;" class="mb-4">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    @foreach ($data as $dt)
                        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-receipt"></i>
                            <h4>{{ $dt->name }}</h4>
                            <p>{{ $dt->description }}</p>
                        </div>

                    @endforeach

                </div>
            </div>

        </div>
    </section>

    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Berita</h2>
            <p>Lowongan Pekerjaan</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card shadow-sm garis">
                    <img src="{{ asset('assets/img/web.jpeg') }}" class="card-img" alt=""
                        class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                        focusable="false">

                    <div class="card-body">
                        <h5 class="card-text  warna">Web Developer</h5>
                        <p class="card-text">
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#webdeveloper">
                            Syarat-syarat
                        </button>

                        <div class="modal fade" id="webdeveloper" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">PERSYARATAN</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Yang harus dikuasai</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>1. Menguasai CSS</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>2. Menguasai Javascript</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card shadow-sm garis">
                    <img src="{{ asset('assets/img/design.jpeg') }}" alt="" class="bd-placeholder-img card-img-top"
                        width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">

                    <div class="card-body">
                        <h5 class="card-text warna">Web Design</h5>
                        <p class="card-text">

                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#webdesign">
                            Syarat-syarat
                        </button>

                        <div class="modal fade" id="webdesign" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">PERSYARATAN</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Yang harus dikuasai</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>1. Menguasai CSS</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>2. Menguasai Javascript</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm garis">
                    <img src="{{ asset('assets/img/hacker.jpeg') }}" alt="" class="bd-placeholder-img card-img-top"
                        width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <div class="card-body">
                        <h5 class="card-text warna">Hacker</h5>
                        <p class="card-text">

                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hacker">
                            Syarat-syarat
                        </button>

                        <div class="modal fade" id="hacker" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">PERSYARATAN</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Yang harus dikuasai</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>1. Menguasai CSS</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>2. Menguasai Javascript</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
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






@endsection
