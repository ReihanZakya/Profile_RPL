<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('AdminLTE/gambar/logo_smk.jpg') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SMK Mahaputra</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLTE/gambar/reski.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="true">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}"
                        class="nav-link {{ Request::path() === 'dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <!-- Mata Pelajaran -->
                <li class="nav-item ">
                    <a href="{{ url('subject') }}"
                        class="nav-link {{ Request::path() === 'subject' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mata Pelajaran</p>
                    </a>
                </li>
                <!--Guru-->
                <li class="nav-item">
                    <a href="{{ url('teacher') }}"
                        class="nav-link {{ Request::path() === 'teacher' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Guru</p>
                    </a>
                </li>
                <!-- Guru Mapel -->
                <li class="nav-item">
                    <a href="{{ url('teacher_subject') }}"
                        class="nav-link {{ Request::path() === 'teacher_subject' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Guru Mapel</p>
                    </a>
                </li>
                <!-- Peluang Kerja -->
                <li class="nav-item">
                    <a href="{{ url('job_opportunities') }}"
                        class="nav-link {{ Request::path() === 'job_opportunities' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Peluag Kerja</p>
                    </a>
                </li>
                <!--Portofolio-->
                <li class="nav-item">
                    <a href="{{ url('portfolio') }}"
                        class="nav-link {{ Request::path() === 'portfolio' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Portofolio</p>
                    </a>
                </li>
                <!-- Dokuementasi -->
                <li class="nav-item">
                    <a href="{{ url('documentation') }}"
                        class="nav-link {{ Request::path() === 'documentation' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dokumentasi</p>
                    </a>
                </li>
                <!-- Berita -->
                <li class="nav-item">
                    <a href="{{ url('news') }}" class="nav-link {{ Request::path() === 'news' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
