@extends('template.main')
@section('content')
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <!-- Kelas X -->
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Mata Pelajaran</h2>
                        <h3 class="mt-3">Kelas X</h3>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed pdx" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <b>Pemrograman Dasar</b>
                                </button>
                            </h2>
                            <div id="pdx" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @include('mapel.pd')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed siskomx" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Sistem Komputer</b>
                            </button>
                        </h2>
                        <div id="siskomx" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.siskom')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed simdigx" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <b>Simulasi Digital</b>
                                </button>
                            </h2>
                            <div id="simdigx" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @include('mapel.simdig')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed komjarx" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Teknik Komputer Jaringan</b>
                            </button>
                        </h2>
                        <div id="komjarx" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.komjar')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kelas XI -->
                <div class="container mt-3" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Mata Pelajaran</h2>
                        <h3 class="mt-3">Kelas XI</h3>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed basdatxi" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Basis Data</b>
                            </button>
                        </h2>
                        <div id="basdatxi" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.basdat')
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed pwpbxi" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Pemrograman Web dan Perangkat Bergerak</b>
                            </button>
                        </h2>
                        <div id="pwpbxi" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.pwpb')
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed pdkkxi" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Produk Kreatif dan Kewirausahaan</b>
                            </button>
                        </h2>
                        <div id="pdkkxi" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.pdkk')
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed pboxi" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Pemrograman Berorientasi Objek</b>
                            </button>
                        </h2>
                        <div id="pboxi" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.pbo')
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed pplxi" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Pemodelan Perangkat Lunak</b>
                            </button>
                        </h2>
                        <div id="pplxi" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.ppl')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kelas XII -->
                <div class="container mt-3" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Mata Pelajaran</h2>
                        <h3 class="mt-3">Kelas XII</h3>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed basdatxii" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Basis Data</b>
                            </button>
                        </h2>
                        <div id="basdatxii" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.basdatxii')
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed pwpbxii" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Pemrograman Web dan Perangkat Bergerak</b>
                            </button>
                        </h2>
                        <div id="pwpbxii" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.pwpbxii')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed pboxii" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Pemrogaman Berorientasi Objek</b>
                            </button>
                        </h2>
                        <div id="pboxii" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.pboxii')
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed pdkkxii" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Produk Kreatif dan Kewirausahaan</b>
                            </button>
                        </h2>
                        <div id="pdkkxii" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('mapel.pdkkxii')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
