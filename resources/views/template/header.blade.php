<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">


        <h5 class="logo"><a href="#">Rekayasa Perangkat Lunak<span>.</span></a></h5>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

       
        <nav id="navbar" class="navbar order-last order-lg-0 ">
            <ul class="nav ml-auto">
                <li class="nav-item"><a class="link {{ url()->current() == url('/') ? 'active' : '' }}" href="/">Beranda</a></li>
                <li class="nav-item"><a class="link {{ url()->current() == url('RPL/mata_pelajaran') ? 'active' : '' }}"
                        href="{{ url('RPL/mata_pelajaran') }}">Mata Pelajaran</a></li>
                <li class="nav-item"><a class="link {{ url()->current() == url('RPL/guru') ? 'active' : '' }}"
                        href="{{ url('RPL/guru') }}">Guru</a></li>
                <li class="nav-item"><a class="link {{ url()->current() == url('RPL/peluang_kerja') ? 'active' : '' }}"
                        href="{{ url('RPL/peluang_kerja') }}">Peluang Kerja</a></li> 
                <li class="nav-item"><a class="link {{ url()->current() == url('RPL/portfolio') ? 'active' : '' }}"
                        href="{{ url('RPL/portfolio') }}">Portofolio</a></li>
                <li class="nav-item"><a href="{{ url('RPL/contact') }}"
                        class="link {{ url()->current() == url('RPL/contact') ? 'active' : '' }}">Kontak</a></li>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->


    </div>
</header>
