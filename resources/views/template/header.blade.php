<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">


        <h5 class="logo"><a href="#">Rekayasa Perangkat Lunak<span>.</span></a></h5>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


        <nav id="navbar" class="navbar order-last order-lg-0 ">
            <ul class="nav ml-auto">
                <li class="nav-item"><a class="link {{ url()->current() == url('/') ? 'active' : '' }}"
                        href="{{ url('/') }}" style="font-size: 14px;">Beranda</a></li>
                <li class="nav-item"><a href="{{ url('RPL/berita') }}"
                        class="link {{ url()->current() == url('RPL/berita') ? 'active' : '' }}"
                        style="font-size: 14px;">Berita</a></li>
                <li class="nav-item"><a
                        class="link {{ url()->current() == url('RPL/mata_pelajaran') ? 'active' : '' }}"
                        href="{{ url('RPL/mata_pelajaran') }}" style="font-size: 14px;">Mata Pelajaran</a></li>
                <li class="nav-item"><a class="link {{ url()->current() == url('RPL/guru') ? 'active' : '' }}"
                        href="{{ url('RPL/guru') }}" style="font-size: 14px;">Guru</a></li>
                <li class="nav-item"><a
                        class="link {{ url()->current() == url('RPL/peluang_kerja') ? 'active' : '' }}"
                        href="{{ url('RPL/peluang_kerja') }}" style="font-size: 14px;">Peluang Kerja</a></li>
                <li class="nav-item"><a
                        class="link {{ url()->current() == url('RPL/portfolio') ? 'active' : '' }}"
                        href="{{ url('RPL/portfolio') }}" style="font-size: 14px;">Portofolio</a></li>
                <li class="nav-item"><a href="{{ url('RPL/contact') }}"
                        class="link {{ url()->current() == url('RPL/contact') ? 'active' : '' }}"
                        style="font-size: 14px;">Kontak</a></li>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->


    </div>
</header>
