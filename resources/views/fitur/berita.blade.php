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
                                                                  <td style="text-align: justify;">Belum lama ini di Amerika Serikat terjadi "Sunburst" pembobolan sejumlah kementerian penting. Lalu, apakah kamu tahu apa itu "Sunburst"?</td>
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
                                <img src="{{ asset('assets/img/hacker4.png') }}" alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225" role="img"
                                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">

                                <div class="card-body" style="margin: 5px;">
                                    <h5 class="card-text warna">Bulan-bilanan RI di Tangan Peretas.</h5>
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
                                                                  <th scope="col">PERETASAN</th>
                                                                  <th scope="col"></th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row"></th>
                                                                  <td style="text-align: justify;">Jakarta, CNN Indonesia -- Peretasan di berbagai instansi milik pemerintah belakangan marak terjadi. Tak tanggung-tanggung, hacker membobol hingga ratusan juta data penduduk Indonesia.
                                                                      Terbaru, peretas bukan hanya bereaksi untuk menyitat data pribadi lewat aplikasi eHAC, namun hacker asal China dikabarkan telah menembus beberapa lembaga pemerintah Indonesia, termasuk Badan Intelijen Negara (BIN).</td>
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
                                <img src="{{ asset('assets/img/hacker3.png') }}" alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">

                                <div class="card-body" style="margin: 5px;">
                                    <h5 class="card-text warna">Hacker China Membobol BIN. </h5>
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
                                                                  <th scope="col">PEMBOBOLAN</th>
                                                                  <th scope="col"></th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row"></th>
                                                                  <td style="text-align: justify;">Peneliti Inskit pertama kali menemukan upaya pembobolan 10 Kementerian termasuk BIN pada April 2021. Peretasan itu dikabarkan terhubung dengan Mustang Panda yang dikenal sebagai peretas asal China, yang menargetkan kawasan Asia Tenggara.
                                                                  Awalnya, mereka saat itu sedang mendeteksi server pengendali dan control (C&C) malware PlugX yang dioperasikan Mustang Panda. Server tersebut ternyata berkomunikasi dengan beberapa host dalam jaringan pemerintah Indonesia.
                                                                  Mereka kemudian menelusuri lebih lanjut dan mengklaim hal itu telah berlangsung sejak Maret 2021. Namun, belum jelas metode serta target dari peretasan tersebut.
                                                                  Peneliti Insikt Group menyatakan telah memberi tahu celah tersebut ke Indonesia pada Juni 2021 dan dilakukan lagi pada Juli 2021. Namun, pemerintah Indonesia disebut tidak merespons laporan itu.
                                                                  BIN juga disebut menjadi salah satu target paling sensitif dari aksi peretasan itu. Mereka juga tidak merespons laporan The Record pada Juli dan Agustus 2021.
                                                                </td>
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pendidikan">
                                                Selengkapnya
                                    </button> 

                                    <div class="modal fade" id="pendidikan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                  <td style="text-align: justify;">Dosen dan mahasiswa Fakultas Teknik Universitas Indonesia membuat perangkat lunak Prediksi Risiko Kerusakan Pipa Gas.</td>
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
                                <img src="{{ asset('assets/img/antusias.png') }}" class="card-img"  alt=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">

                                <div class="card-body" style="margin:5px;">
                                    <h5 class="card-text  warna">Antusias Belajar di Masa Pandemi.</h5>
                                    <p class="card-text">
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edukasi">
                                                Selengkapnya
                                    </button>  

                                    <div class="modal fade" id="edukasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                  <th scope="col">PENDIDIKAN</th>
                                                                  <th scope="col"></th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <th scope="row"></th>
                                                                  <td style="text-align: justify;">Pemahaman dasar tentang pemrograman atau koding menjadi kebutuhan yang penting pada saat sekarang ini. Diberbagai negara sudah menerapkan pembelajaran pemrograman sejak sekolah dasar. Sementara di Indonesia, pembelajaran pemrograman akan diajarkan ditingkat Sekolah Menegah Atas atau bisa didapatkan diluar sekolah . Mayoritas siswa menyadari manfaat pemrograman dan besarnya potensi yang bisa didapat ketika menguasai pemrograman, sehingga siswa sangat berharap dapat mengetahui lebih tentang pemrograman. Namun, saat ini masih banyak kualifikasi guru TIK bukan lah dari jurusan informatika. Seperti yang dijelaskan oleh Kepala Pusat Kurikulum dan Pembelajaran Kementerian Pendidikan dan Kebudayaan dalam acara Grow with Google, menjelaskan bahwa banyak guru yang mengajarkan TIK yang mempunyai background bukan dari informatika, misalnya teknik komputer, teknik informatika.</td>
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