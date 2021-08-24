@extends('template.main')
@section('content')
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
          <!-- Kelas X -->
          <h3 class="text-center mb-3"><b>Kelas X</b></h3>
       <div class="col-sm-6">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed pdx" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <b>Pemrograman Dasar</b>
                </button>
              </h2>
              <div id="pdx" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 @include('mapel.pd')
                </div>
              </div>
            </div>
          </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed simdigx" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <b>Simulasi Digital</b>
                </button>
              </h2>
              <div id="simdigx" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 @include('mapel.simdig')
                </div>
              </div>
            </div>
          </div>
       </div>
       <div class="col-sm-6">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed komjarx" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <b>Teknik Komputer Jaringan</b>
              </button>
            </h2>
            <div id="komjarx" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                @include('mapel.komjar')
              </div>
            </div>
          </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed siskomx" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <b>Sistem Komputer</b>
              </button>
            </h2>
            <div id="siskomx" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                @include('mapel.siskom')
              </div>
            </div>
          </div>
       </div>
       <!-- Kelas XI -->
       <h3 class="text-center mt-3 mb-3"><b>Kelas XI</b></h3>
       <div class="col-sm-6">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed basdatxi" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <b>Basis Data</b>
              </button>
            </h2>
            <div id="basdatxi" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                @include('mapel.basdat')
              </div>
            </div>
          </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed pdkkxi" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <b>Produk Kreatif dan Kewirausahaan</b>
              </button>
            </h2>
            <div id="pdkkxi" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                @include('mapel.pdkk')
              </div>
            </div>
          </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed pplxi" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <b>Pemodelan Perangkat Lunak</b>
              </button>
            </h2>
            <div id="pplxi" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                @include('mapel.ppl')
              </div>
            </div>
          </div>
       </div>
       <div class="col-sm-6">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed pboxi" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <b>Pemrogaman Berorientasi Objek</b>
              </button>
            </h2>
            <div id="pboxi" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                @include('mapel.pbo')
              </div>
            </div>
          </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed pwpbxi" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <b>Pemrogaman Web dan Perangkat Bergerak</b>
              </button>
            </h2>
            <div id="pwpbxi" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                @include('mapel.pwpb')
              </div>
            </div>
          </div>
       </div>
      </div>
    </section>

@endsection
