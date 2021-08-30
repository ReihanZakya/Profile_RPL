@extends('template.main')

@section('content')

    <section id="features" class="features">
        <div class="container mt-5" data-aos="fade-up">

            <div class="row">
                <div class="image col-lg-6 komputer" data-aos="fade-right">
                    <img src="{{ asset('assets/img/home/komputer.jpg') }}" style="width: 500px;" class="img-fluid">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                        <h4 class="mb-5">Apa itu jurusan RPL</h4>
                        <p>
                            RPL adalah singkatan dari Rekayasa Perangkat Lunak dan merupakan sebuah jurusan
                            yang ada di Sekolah Menengah Kejuruan (SMK). RPL adalah sebuah jurusan yang mempelajari
                            dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan,
                            manajemen
                            organisasi pengembangan perangkat lunak dan manajemen kualitas.
                        </p>
                    </div>
                </div>

                <div class="container mt-5">
                    <div class="row">
                        <h4><strong>Sejarah Singkat</strong></h4>
                        <p style="text-align: right">
                            <span class="mb-3"> Tanggal Didirikan : <i class="fas fa-calendar-alt"
                                    style="margin-right: 10px;"></i>22 Agustus 2016</span>
                        </p>
                        <p class="sejarah" style="font-size: 14px;">SMKS Mahaputra Cerdas Utama merupakan sekolah
                            menengah
                            keatas yang memiliki lokasi tanah dengan lebar 1,8 hektare
                            dari hak milik pribadi Prof. Dr Ir. H. Eddy Jusuf, Sp.,Msi.,M.kom.
                            Disinilah asal mula tanah sawah berubah menjadi kebun tanaman,
                            sebagian diatas tanah tersebut dibangun rumah villa, kemudian
                            2014 di letakkan batu pertama untuk gedung sekolah, pembangunan
                            selesai pada tahun 2015. Sekolah SMKS Mahaputra Cerdas Utama ini
                            dibuka pada tahun ajaran 2016/2017. Sekolah ini juga sudah mendapatkan
                            predikat atau gelar Adiwiyata se-provinsi Jawa Barat dan memiliki angkatan
                            pertama berjumlah 36 siswa, angkatan kedua dengan total 90 siswa, dan angkatan
                            ketiga berjumlah 95 siswa. Pada tahun ajaran 2021/2022 ini, SMKS Mahaputra Cerdas
                            Utama sudah memiliki 3 angkatan dengan jumlah keseluruhannya adalah 221 siswa.
                        </p>
                    </div>
                </div>


                <div class="container mt-5">
                    <h4 class="mb-3"><strong>Visi Misi</strong></h4>
                    <div class="row">
                        <h6>Visi</h6>
                        <p class="sejarah mt-2" style="font-size: 14px;">
                            "Menjadi penyelenggara pendidikan kejuruan yang
                            melahirkan tenaga ahli, terampil, kreatif, inovatif dam
                            berpengetahuan yang ramah lingkungan di tahun 2025".
                        </p>
                        <h6 class="mt-3">Misi</h6>
                        <ol style="margin-left: 30px;" class="sejarah">
                            <li>Menyelenggarakan Pendidikan Kejuruan Berkarakter Religus.</li>
                            <li>Melahirkan Tenaga Ahli Tingkat Menengah yang Berahklakul Karimah.</li>
                            <li>Mewujudkan Tenaga Terampil, Kreatif, dan Berpengetahuan.</li>
                            <li>Membangun Perilaku yang Ramah Lingkungan.</li>
                            <li>Menjalin Kerjasama Dengan Lembaga Akademik dan Non Akademik Ditingkat Lokal dan
                                Internasional.</li>
                        </ol>
                    </div>
                </div>

            </div>`
    </section>


@endsection
