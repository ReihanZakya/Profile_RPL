@extends('template.main6')

@section('content')

<div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Berita Global</h2>
                    <p>Seputar Rekayasa Perangkat Lunak</p>
                </div>
            </div>

            <div class="container mt-5">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <div class="col-md-4 col-sm-12 mb-3">
                            <div class="card shadow-sm garis">
                                <img src="{{ asset('assets/img/sunburst.png') }}" class="card-img"  alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">

                                <div class="card-body" style="margin:5px;">
                                    <h5 class="card-text  warna">Apa Itu "Sunburst"?</h5>
                                    <p class="card-text">
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#webdeveloper">
                                                Selengkapnya
                                    </button>  

                                    <div class="modal fade" id="webdeveloper" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">SELENGKAPNYA</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        
                                                      <table class="table">
                                                              <thead>
                                                                <tr>
                                                                  <th scope="col"></th>
                                                                  <th scope="col">Apa itu SUNBURST</th>
                                                                  <th scope="col"></th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row"></th>
                                                                  <td>Belum lama ini di Amerika Serikat terjadi "Sunburst" yang telah membobol sejumlah kementerian penting. Lalu, apakah kamu tahu apa itu "Sunburst"?</td>
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
                                                
                                </div>
                            </div>
                          </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                            <div class="card shadow-sm garis">
                                <img src="{{ asset('assets/img/gas.png') }}" alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225" role="img"
                                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">

                                <div class="card-body" style="margin: 5px;">
                                    <h5 class="card-text warna">Kerusakan Pipa Gas</h5>
                                    <p class="card-text">
                                    
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#webdesign">
                                                Selengkapnya
                                    </button> 

                                    <div class="modal fade" id="webdesign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">SELENGKAPNYA</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        
                                                      <table class="table">
                                                              <thead>
                                                                <tr>
                                                                  <th scope="col"></th>
                                                                  <th scope="col">Kebocoran pipa gas</th>
                                                                  <th scope="col"></th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row"></th>
                                                                  <td>Dosen dan mahasiswa Fakultas Teknik Universitas Indonesia membuat perangkat lunak Prediksi Risiko Kerusakan Pipa Gas.</td>
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
                                    <div class="d-flex justify-content-between align-items-center">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col">
                            <div class="card shadow-sm garis">
                                <img src="{{ asset('assets/img/software.png') }}" alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">

                                <div class="card-body" style="margin: 5px;">
                                    <h5 class="card-text warna">Apa itu Software?</h5>
                                    <p class="card-text">
                                   
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hacker">
                                                Selengkapnya
                                    </button> 

                                    <div class="modal fade" id="hacker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">SELENGKAPNYA</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        
                                                      <table class="table">
                                                              <thead>
                                                                <tr>
                                                                  <th scope="col"></th>
                                                                  <th scope="col">Apa itu software</th>
                                                                  <th scope="col"></th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row"></th>
                                                                  <td>Software adalah kumpulan instruksi atau program yang menginstruksikan komputer untuk melakukan tugas. Tanpa perangkat lunak, komputer tidak berguna.</td>
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
                                    <div class="d-flex justify-content-between align-items-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
             <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Berita Edukasi</h2>
                    <p>Seputar Rekayasa Perangkat Lunak</p>
                </div>
            </div>

            <div class="container mt-5">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col-md-4 col-sm-12 mb-3">
                            <div class="card shadow-sm garis">
                                <img src="{{ asset('assets/img/gas.png') }}" alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225" role="img"
                                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">

                                <div class="card-body" style="margin: 5px;">
                                    <h5 class="card-text warna">Kerusakan Pipa Gas</h5>
                                    <p class="card-text">
                                    
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#webdesign">
                                                Selengkapnya
                                    </button> 

                                    <div class="modal fade" id="webdesign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">SELENGKAPNYA</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        
                                                      <table class="table">
                                                              <thead>
                                                                <tr>
                                                                  <th scope="col"></th>
                                                                  <th scope="col">Kebocoran pipa gas</th>
                                                                  <th scope="col"></th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row"></th>
                                                                  <td>Dosen dan mahasiswa Fakultas Teknik Universitas Indonesia membuat perangkat lunak Prediksi Risiko Kerusakan Pipa Gas.</td>
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
                                    <div class="d-flex justify-content-between align-items-center">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>



                    <div class="col-md-4 col-sm-12 mb-3">
                            <div class="card shadow-sm garis">
                                <img src="{{ asset('assets/img/sunburst.png') }}" class="card-img"  alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">

                                <div class="card-body" style="margin:5px;">
                                    <h5 class="card-text  warna">Apa Itu "Sunburst"?</h5>
                                    <p class="card-text">
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#webdeveloper">
                                                Selengkapnya
                                    </button>  

                                    <div class="modal fade" id="webdeveloper" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">SELENGKAPNYA</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        
                                                      <table class="table">
                                                              <thead>
                                                                <tr>
                                                                  <th scope="col"></th>
                                                                  <th scope="col">Apa itu SUNBURST</th>
                                                                  <th scope="col"></th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row"></th>
                                                                  <td>Belum lama ini di Amerika Serikat terjadi "Sunburst" yang telah membobol sejumlah kementerian penting. Lalu, apakah kamu tahu apa itu "Sunburst"?</td>
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
                                                
                                </div>
                            </div>
                          </div>
                            

                            <div class="col">
                            <div class="card shadow-sm garis">
                                <img src="{{ asset('assets/img/software.png') }}" alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">

                                <div class="card-body" style="margin: 5px;">
                                    <h5 class="card-text warna">Apa itu Software?</h5>
                                    <p class="card-text">
                                   
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hacker">
                                                Selengkapnya
                                    </button> 

                                    <div class="modal fade" id="hacker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">SELENGKAPNYA</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        
                                                      <table class="table">
                                                              <thead>
                                                                <tr>
                                                                  <th scope="col"></th>
                                                                  <th scope="col">Apa itu software</th>
                                                                  <th scope="col"></th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row"></th>
                                                                  <td>Software adalah kumpulan instruksi atau program yang menginstruksikan komputer untuk melakukan tugas. Tanpa perangkat lunak, komputer tidak berguna.</td>
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
                                    <div class="d-flex justify-content-between align-items-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    



@endsection