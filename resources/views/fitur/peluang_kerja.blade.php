@extends('template.main')

@section('halaman test')

<section id="features" class="features">
    <div class="container mt-5" data-aos="fade-up">

      <div class="row">
        <h4 class="mb-5 text-center">Peluang kerja lulusan jurusan RPL</h4>
        <div class="image col-lg-6" data-aos="fade-right">
        <img src="{{ asset('assets/img/home/peluangkerja.jpg') }}" alt="" style="width: 550px;" height="400px;">
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-shield"></i>
            <h4>Developer Android</h4>
            <p>Android Developer adalah orang yang bertanggung jawab untuk mengembangkan dan membangun perangkat lunak berbasis mobile menggunakan sistem operasi Android.</p>
          </div></div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
          <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">

            <i class="bx bx-receipt"></i>
            <h4>Programmer</h4>
            <p>Programmer adalah seseorang yang memiliki kemampuan atau skill menulis dan merancang kode
                program-program (syntax) komputer menggunakan bahasa-bahasa pemrograman komputer
                (Java, Php, Javascript dll).</p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-cube-alt"></i>
            <h4>Backend Developer</h4>
            <p>Back end developer adalah seseorang yang memiliki spesialisasi di bidang back end web development.</p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-cube-alt"></i>
            <h4>Frontend Developer</h4>
            <p>Front End Dev merupakan pekerjaan dimana seorang pengembang website atau mobile yang menggunakan
                bahasa pemrograman sehingga menghasilkan sebuah tampilan / interface agar dapat dilihat oleh user.</p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-images"></i>
            <h4>Quality Assurance</h4>
            <p>Quality Assurance adalah kualitas produk serta layanan terhadap konsumen menjadi salah satu faktor yang sangat penting dalam melakukan persaingan pasar.</p>
          </div>

        </div>
      </div>

    </div>
  </section>


@endsection
