@extends('template.main')

@section('content')

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.87.0">
        <title>Album example · Bootstrap v5.1</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">



        <!-- Bootstrap core CSS -->
        <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            }

        </style>


    </head>

    <body>

        <header>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"
                            class="me-2" viewBox="0 0 24 24">
                            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                            <circle cx="12" cy="13" r="4" />
                        </svg>
                        <strong>Dokumentasi</strong>
                    </a>
                </div>
            </div>
        </header>

        <main>

            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Dokumentasi</h1>
                        <p class="lead text-muted text-center">Dokumentasi dari SMKS Mahaputra Cerdas Utama</p>
                        <p class="text-center container">
                            <a href="{{ url('RPL/portfolio') }}" class="btn btn-outline-warning my-2 ">Portofolio</a>
                            <a href="{{ url('RPL/dokumentasi') }}" class="btn btn-outline-warning my-2">Dokumentasi</a>
                        </p>
                    </div>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($data as $dt)
                            <div class="col">
                                <div class="card shadow-sm garis">
                                    <img src="{{ asset('AdminLTE/documentation/' . $dt->photo) }}" alt=""
                                        class="bd-placeholder-img card-img-top" width="100%" height="225"
                                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <div class="card-body">
                                        <h5 class="card-text warna">{{ $dt->name }}</h5>
                                        <p class="card-text"></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="portfolio-links">
                                                <a href="{{ asset('AdminLTE/documentation/' . $dt->photo) }}"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox btn btn-sm btn-outline-secondary"><i
                                                        class="bi bi-zoom-in"></i></a>
                                                @if ($dt->source)
                                                    <a target="_blank" href="{{ $dt->source }}"
                                                        class="btn btn-sm btn-outline-secondary" title="More Details"><i
                                                            class="bi bi-instagram"></i></a>
                                                @else
                                                    <a target="_blank" href="#">{{ $dt->source }}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </main>
    </body>

    </html>
@endsection
