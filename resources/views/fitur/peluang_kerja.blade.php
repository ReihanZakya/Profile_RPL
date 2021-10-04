@extends('template.main5')

@section('content')

    <section id="features" class="features">
        <div class="container mt-5" data-aos="fade-up">

            <div class="row">
                <h4 class="text-center mb-5"><strong>Peluang kerja lulusan jurusan RPL</strong></h4>
                <div class="image col-lg-6" data-aos="fade-right">
                    <img src="{{ asset('assets/img/LowonganKerja.jpg') }}" class="img-fluid rounded border-start-0" alt=""
                        style="width: 550px;" height="400px;" class="mb-4">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    @foreach ($data as $dt)
                        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-receipt"></i>
                            <h4>{{ $dt->name }}</h4>
                            <p>{!! $dt->description !!}</p>
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

    <div class="container mb-5 mt-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card shadow-sm garis">
                    <img src="{{ asset('assets/img/web.jpeg') }}" class="card-img" alt=""
                        class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                        focusable="false">

                    <div class="card-body">
                        <h5 class="card-text  warna">Front End Developer</h5>
                        <h5 class="card-text  warna">PT Deden Alif</h5>
                        <p class="card-text">
                        </p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#webdeveloper"
                            style="font-size: 14px; color: orange;">Syarat-syarat
                        </button>

                        <div class="modal fade" id="webdeveloper" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">PERSYARATAN</h5>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Kualifikasi</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>1. Pendidikan minimal SMK Rekayasa Perangkat Lunak.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>2. Memiliki Laptop pribadi untuk bekerja.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>3. Pengalaman minimal 2 tahun.
                                                    </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>4. Menguasai HTML,CSS,Javascript.
                                                </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>5. Menguasai Vue.js(nilai plus).
                                                </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>6. Terbiasa menggunakan version control(git,github).
                                                </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>7. Jujur,Miliki loyalitas dan integritas yang tinggi.
                                                </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>8. Mampu bekerja dibawah tekanan.
                                                </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>9. Dapat bergabung secepatnya.
                                                </td>
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
                        <h5 class="card-text warna">Flutter Developer</h5>
                        <h5 class="card-text warna">PT Luqman Muhammad S</h5>
                        <p class="card-text">

                        </p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#webdesign"
                            style="font-size: 14px; color: orange;">
                            Syarat-syarat
                        </button>

                        <div class="modal fade" id="webdesign" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">PERSYARATAN</h5>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Kualifikasi</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>1. Pendidikan minimal SMK Rekayasa Perangkat Lunak.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>2. Memiliki Laptop pribadi untuk bekerja.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>3. Pengalaman membuat aplikasi iOS.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>4. Pengalaman menggunakan Flutter minimal 1 tahun.
                                                </tr>
                                                <tr>
                                                    </th>
                                                    <th scope="row"></th>
                                                    <td>5. Menguasai konsep API.
                                                    </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>6. Familiar dengan git
                                                </td>
                                                </tr>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>7. Diutamakan pernah membuat aplikasi yang terhubung dengan API
                                                </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>8. Jujur,Miliki loyalitas dan integritas yang tinggi.
                                                </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>9. Mampu bekerja dibawah tekanan.
                                                </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>10. Dapat bergabung secepatnya.
                                                </td>
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
                        <h5 class="card-text warna">IT Network & Hardware Engginer</h5>
                        <h5 class="card-text warna">PT Rayhan Zakya Alawi</h5>
                        <p class="card-text">

                        </p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#hacker"
                            style="font-size: 14px; color: orange;">
                            Syarat-syarat
                        </button>

                        <div class="modal fade" id="hacker" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">PERSYARATAN</h5>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Kualifikasi</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>1. SMK Rekayasa Perangkat Lunak/TKJ.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>2. Pengalaman 1 tahun.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>3. Mengerti Jaringan LAN & WAN.
                                                    </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>4. Memiliki pengetahuan dasar PBX
                                                </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>5. Bisa konfigurasi, pemeliharaan dan troubleshoot router dan perangkat
                                                    jaringan terkait seperti server, switch dan modem
                                                </td>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>6. Mengerti konfigurasi cctv
                                                </td>
                                                </tr>
                                                </tr>
                                                <th scope="row"></th>
                                                <td>7. Mengerti windows & linux /ios
                                                </td>
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
