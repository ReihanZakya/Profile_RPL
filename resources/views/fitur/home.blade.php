@extends('template.main')

@section('halaman home')

<section id="features" class="features">
    <div class="container mt-5" data-aos="fade-up">

      <div class="row">
        <div class="image col-lg-6" style='background-image: url("assets/img/home/komputer.jpg");' data-aos="fade-right"></div>
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
                <button type="button" class="btn btn-light btn-sm modal-pwpb">Pemrograman Web dan Perangkat Bergerak.</button>
            </li>
            <li>
                <button type="button" class="btn btn-light btn-sm modal-basdat">Basis Data.</button>
            </li>
            <li>
                <button type="button" class="btn btn-light btn-sm  modal-pdkk">Produk Kreatif dan Kewirausahaan.</button>
            </li>
            <li>
                <button type="button" class="btn btn-light btn-sm  modal-pbo">Pemrograman Berorientasi Objek.</button>
            </li>
        </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">

          <h5>Kelas X</h5>
          <ul>
            <li>
                <button type="button" class="btn btn-light btn-sm modal-pd">Pemrograman Dasar.</button>
            </li>
            <li>
                <button type="button" class="btn btn-light btn-sm modal-tkj">Teknik Komputer Jaringan.</button>
            </li>
            <li>
                <button type="button" class="btn btn-light btn-sm modal-siskom">Sistem Komputer.</button>
            </li>
            <li>
                <button type="button" class="btn btn-light btn-sm  modal-simdig">Simulasi Digital.</button>
            </li>
          </ul>
          <ul>
            <h5>Kelas XI</h5>
            <li>
                <button type="button" class="btn btn-light btn-sm modal-pwpb">Pemrograman Web dan Perangkat Bergerak.</button>
            </li>
            <li>
                <button type="button" class="btn btn-light btn-sm modal-basdat">Basis Data.</button>
            </li>
            <li>
                <button type="button" class="btn btn-light btn-sm  modal-pdkk">Produk Kreatif dan Kewirausahaan.</button>
            </li>
            <li>
                <button type="button" class="btn btn-light btn-sm  modal-pbo">Pemrograman Berorientasi Objek.</button>
            </li>
            <li>
                <button type="button" class="btn btn-light btn-sm  modal-ppl">Pemodelan Perangkat Lunak.</button>
            </li>
          </ul>
        </div>
      </div>
    </section>


@endsection
