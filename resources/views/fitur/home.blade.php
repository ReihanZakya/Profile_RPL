@extends('template.main')

@section('content')

<section id="features" class="features">
    <div class="container mt-5" data-aos="fade-up">

      <div class="row">
        <div class="image col-lg-6 komputer" data-aos="fade-right">
            <img src="{{ asset('assets/img/home/komputer.jpg') }}" style="width: 500px;">
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
          <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <h4 class="mb-5">Apa itu jurusan RPL</h4>
            <p class="text-left">
                RPL adalah singkatan dari Rekayasa Perangkat Lunak dan merupakan sebuah jurusan
                yang ada di Sekolah Menengah Kejuruan (SMK). RPL adalah sebuah jurusan yang mempelajari
                dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen
                organisasi pengembangan perangkat lunak dan manajemen kualitas.
            </p>
        </div>
      </div>

    </div>
  </section>

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <h4 class="mb-5 text-center"><b>Pembelajaran jurusan RPL</b></h4>
        <div class="col-lg-6 order-1 order-lg-2 content" data-aos="fade-left" data-aos-delay="100">
          <img src="{{asset('assets/img/home/belajar.jpeg')}}" class="img-fluid mb-4" alt="" >

          <h5>Kelas XII</h5>
          <ul>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#pwpbxii" aria-expanded="false" aria-controls="collapseExample">
                    Pemrograman Web dan Perangkat Bergerak
                  </button>
                </p>
                <div class="collapse mt-3" id="pwpbxii">
                  <div class="card card-body">
                    <p><strong>Pemrograman Web dan Perangkat Bergerak</strong> adalah Proses
                        atau Cara untuk menjalankan intruksi pada sebuah komputer yang
                        terhubung ke internet untuk membuat fungsi atau tugas tertentu.
                        dan dalam menjalanan sebuah program di dalam web itu melaui web
                        browser seperti : mozilla, Opera, Chrome, dll.</p>
                  </div>
                </div>
            </li>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button"
                data-bs-toggle="collapse" data-bs-target="#basdatxii" aria-expanded="false" aria-controls="collapseExample">
                    Basis Data
                  </button>
                </p>
                <div class="collapse mt-3" id="basdatxii">
                  <div class="card card-body">
                    <p><strong>Basis Data</strong> adalah kumpulan data yang dikelola sedemikian rupa
                        berdasarkan ketentuan tertentu yang saling berhubungan sehingga mudah dalam pengelolaannya.</p>
                  </div>
                </div>
            </li>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button" data-bs-toggle="collapse" data-target="#open" aria-expanded="false" aria-controls="collapseExample">
                    Produk Kreatif dan Kewirausahaan
                  </button>
                </p>
                <div class="collapse mt-3" id="pdkkxii">
                  <div class="card card-body">
                    <p> <strong>Produk Kreatif dan Kewirausahaan</strong> merupakan kemampuan dalam
                        mengeluarkan gagasan atau ide untuk menciptakan hasil yang inovatif. Gagasan
                        yang inovatif tersebut nantinya akan memberikan peluang bisnis dan memecahkan
                        permasalahan dalam kehidupan.</p>
                  </div>
                </div>
            </li>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#pboxii" aria-expanded="false" aria-controls="collapseExample">
                    Pemrograman Berorientasi Objek
                  </button>
                </p>
                <div class="collapse mt-3" id="pboxii">
                  <div class="card card-body">
                    <p> <strong>Pemrograman Berorientasi Objek</strong> merupakan suatu
                        metode pemrograman yang berorientasi pada objek. Program-program
                        yang telah ada merupakan gabungan dari beberapa komponen-komponen
                        kecil yang sudah ada sebelumnya.</p>
                  </div>
                </div>
            </li>
        </ul>
        </div>

        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h5>Kelas X</h5>
          <ul>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#pdx" aria-expanded="false" aria-controls="collapseExample">
                    Pemrograman Dasar
                  </button>
                </p>
                <div class="collapse mt-3" id="pdx">
                  <div class="card card-body">
                    <p> <strong>Pemrograman Dasar</strong> ialah proses penulisan, pengujian,
                        debugging, dan pengelolaan kode yang menciptakan program komputer.
                    </p>
                  </div>
                </div>
            </li>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#tkjx" aria-expanded="false" aria-controls="collapseExample">
                    Teknik Komputer Jaringan
                  </button>
                </p>
                <div class="collapse mt-3" id="tkjx">
                  <div class="card card-body">
                    <p> <strong>Teknik Komputer Jaringan</strong> ialah ilmu berbasis
                        Teknologi Informasi dan Komunikasi terkait kemampuan algoritma,
                        dan pemrograman komputer, perakitan komputer, perakitan jaringan
                        komputer, dan pengoperasian perangkat lunak, dan internet.
                    </p>
                  </div>
                </div>
            </li>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#siskomx" aria-expanded="false" aria-controls="collapseExample">
                    Sistem Komputer
                  </button>
                </p>
                <div class="collapse mt-3" id="siskomx">
                  <div class="card card-body">
                    <p> <strong>Sistem Komputer</strong> ialah kumpulan perangkat-perangkat
                        komputer yang saling berhubungan dan berinteraksi satu sama lain
                        untuk melakukan proses pengolahan data, sehingga dapat menghasilkan
                        informasi yang diharapkan oleh penggunanya.
                    </p>
                  </div>
                </div>
            </li>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#simdigx" aria-expanded="false" aria-controls="collapseExample">
                    Simulasi Digital
                  </button>
                </p>
                <div class="collapse mt-3" id="simdigx">
                  <div class="card card-body">
                    <p> <strong>Simulasi Digital</strong> ialah metode pembelajaran yang
                        menggunakan teknologi informasi dan komunikasi melalui pengembangan bahan ajar berbasis web.
                    </p>
                  </div>
                </div>
            </li>
          </ul>

          <ul>
            <h5>Kelas XI</h5>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#pwpbxi" aria-expanded="false" aria-controls="collapseExample">
                    Pemrograman Web dan Perangkat Bergerak
                  </button>
                  <div class="collapse mt-3" id="pwpbxi">
                    <div class="card card-body">
                      <p><strong>Pemrograman Web dan Perangkat Bergerak</strong> adalah Proses
                          atau Cara untuk menjalankan intruksi pada sebuah komputer yang
                          terhubung ke internet untuk membuat fungsi atau tugas tertentu.
                          dan dalam menjalanan sebuah program di dalam web itu melaui web
                          browser seperti : mozilla, Opera, Chrome, dll.</p>
                    </div>
                  </div>
            </li>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button"
                data-bs-toggle="collapse" data-bs-target="#basdatxi" aria-expanded="false" aria-controls="collapseExample">
                    Basis Data
                  </button>
                <div class="collapse mt-3" id="basdatxi">
                    <div class="card card-body">
                      <p><strong>Basis Data</strong> adalah kumpulan data yang dikelola sedemikian rupa
                          berdasarkan ketentuan tertentu yang saling berhubungan sehingga mudah dalam pengelolaannya.</p>
                    </div>
                  </div>
            </li>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button"
                data-bs-toggle="collapse" data-bs-target="#pdkkxi" aria-expanded="false" aria-controls="collapseExample">
                    Produk Kreatif dan Kewirausahaan
                  </button>
                <div class="collapse mt-3" id="pdkkxi">
                    <div class="card card-body">
                        <p> <strong>Produk Kreatif dan Kewirausahaan</strong> merupakan kemampuan dalam
                            mengeluarkan gagasan atau ide untuk menciptakan hasil yang inovatif. Gagasan
                            yang inovatif tersebut nantinya akan memberikan peluang bisnis dan memecahkan
                            permasalahan dalam kehidupan.</p>
                    </div>
                  </div>
            </li>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button"
                data-bs-toggle="collapse" data-bs-target="#pboxi" aria-expanded="false" aria-controls="collapseExample">
                    Pemrograman Berorientasi Objek
                  </button>
                <div class="collapse mt-3" id="pboxi">
                    <div class="card card-body">
                        <p> <strong>Pemrograman Berorientasi Objek</strong> merupakan suatu
                            metode pemrograman yang berorientasi pada objek. Program-program
                            yang telah ada merupakan gabungan dari beberapa komponen-komponen
                            kecil yang sudah ada sebelumnya.</p>
                    </div>
                  </div>
                </li>
            <li>
                <button class="btn btn-primary btn-sm btn-light" type="button"
                data-bs-toggle="collapse" data-bs-target="#pplxi" aria-expanded="false" aria-controls="collapseExample">
                    Pemodelan Perangkat Lunak
                  </button>
                <div class="collapse mt-3" id="pplxi">
                    <div class="card card-body">
                        <p> <strong>Pemodelan Perangkat Lunak</strong> ialah Disiplin ilmu
                            untuk mempelajari bentuk-bentuk pemodelan perangkat lunak yang
                            digunakan sebagai bagian dari tahapan pengembangan perangkat
                            lunak secara terstruktur dan berorientasi objek. Pemodelan dalam
                            suatu rekayasa perangkat lunak merupakan suatu hal yang dilakukan di tahapan awal.</p>
                    </div>
                  </div>
                </li>
          </ul>
        </div>
      </div>
    </section>


@endsection
