  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" id="main-navbar">
    <!-- Left navbar links -->
    <ul class="navbar-nav align-items-center">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-sm-inline-block">
          <div href="#" class="brand-link text-decoration-none d-flex align-items-center p-1" id="logo-dan-judul">
            <img src="{{ asset('assets/logo-pplk-minified.webp') }}" class="pplk-logo">
            <div>
              <span class="brand-link" id="judul-pplk">PPLK 2022</span>
            </div>
          </div>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Fullscreen and Rightbar -->
      <li class="nav-item" id="icon-fullscreen">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" role="button" style="color:red;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fa-solid fa-arrow-right-to-bracket"></i>
        </a>
        <li class="nav-item d-none d-sm-inline-block">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                @csrf
            </form>
        </li>
      </li>
    </ul>
  </nav>
  <!-- ./navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" id="left-sidebar">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-decoration-none d-flex justify-content-center">
      <span class="brand-text font-weight-light">
        C<span style="font-size:.8rem;">ontent</span>
        M<span style="font-size:.8rem;">anagement</span>
        S<span style="font-size:.8rem;">ystem</span>
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
          @if (auth()->user()->fotoProfil == Null)
            <img src="{{ asset('assets/profile') }}/default.webp" class="img-circle elevation-2" alt="User Image">
          @else
            <img src="{{ asset('assets/profile') }}/{{ auth()->user()->fotoProfil }}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block text-decoration-none">{{ auth()->user()->nama }}</a>
          <a class="d-block text-decoration-none">{{ auth()->user()->email }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!--Pakai class active utk mengaktifkan button-->
          <!--Sama class menu-open supaya dropdown otomatis terbuka di awal load page-->

        @if(auth()->user()->roles_id == 1)
            <!--Dashboard-->
            <li class="nav-item">
                <a href="/super" class="nav-link tablinks ">
                    <i class="fas fa-rocket nav-icon"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>
            <!--./Dashboard-->

            <!--Beranda-->
            <li class="nav-item">
                <a href="/beranda" class="nav-link">
                    <i class="fa-solid fa-earth-asia nav-icon"></i>
                    <p>
                    Home PPLK 2022
                    </p>
                </a>
            </li>
            <!--./Beranda-->

            <!--Panitia-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-user-astronaut"></i>
                <p>
                    Panitia
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('super.user.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Panitia</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('super.user.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data Panitia</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Panitia-->

            <!--User-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-user-astronaut"></i>
                <p>
                    User
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('super.dapmenUser.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('super.dapmenUser.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('super.userProdi.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User by Prodi</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./User-->

            <!--UPT ITERA-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="fa-solid fa-building nav-icon"></i>
                <p>
                    ITERA
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('super.upt.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah UPT</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('super.upt.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data UPT</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./UPT ITERA-->

            <!--Prodi-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-satellite"></i>
                <p>
                    Prodi
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('super.prodi.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Prodi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('super.prodi.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data Prodi</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Prodi-->

            <!--Himpunan-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-people-roof"></i>
                <p>
                    Himpunan
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('super.himpunan.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Himpunan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('super.himpunan.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="font-size:0.9rem;">Kelola Data Himpunan</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Himpunan-->

            <!--UKM/Komunitas-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-people-carry-box"></i>
                <p>
                    UKM/Komunitas
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('super.ukm.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="font-size:0.8rem;">Tambah UKM/Komunitas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('super.ukm.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="font-size:0.8rem;">Kelola UKM/Komunitas</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./UKM/Komunitas-->

            <!--Funfact-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-newspaper"></i>
                <p>
                    Funfact
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('super.funfact.create') }} " class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Funfact</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('super.funfact.index') }} " class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data funfact</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Funfact-->

            <!--Begalin-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-brands fa-evernote"></i>
                <p>
                    Begalin
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('super.begalin.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Begalin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('super.begalin.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data Begalin</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Begalin-->

            <!--Kamus Gaul-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-brands fa-rocketchat"></i>
                <p>
                    Kamus Gaul
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('super.kamusgaul.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Kamus</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('super.kamusgaul.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Kamus Gaul</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Kamus Gaul-->

            <!--Keluhan-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-receipt"></i>
                <p>
                    Keluhan
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('super.keluhan.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Keluhan</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Keluhan-->

            <!--Booklet-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-book-open"></i>
                <p>
                    Booklet
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link tablinks" href="{{ route('super.booklet.index') }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data Booklet</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Booklet-->

            <!--Scanner-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-camera"></i>
                <p>
                    Scanner
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/super/polling" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Scanner Polling</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/super/scanner" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Scanner Panitia</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/super/presensiMaba" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Scanner Maba</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Scanner-->

        @elseif(auth()->user()->roles_id == 2)
            <!--Dashboard-->
            <li class="nav-item">
                <a href="/admin" class="nav-link tablinks ">
                    <i class="fas fa-rocket nav-icon"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>
            <!--./Dashboard-->

            <!--Beranda-->
            <li class="nav-item">
                <a href="/beranda" class="nav-link">
                    <i class="fa-solid fa-earth-asia nav-icon"></i>
                    <p>
                    Home PPLK 2022
                    </p>
                </a>
            </li>
            <!--./Beranda-->

            <!--Panitia-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-user-astronaut"></i>
                <p>
                    Panitia
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.user.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Panitia</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data Panitia</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Panitia-->

            <!--User-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-user-astronaut"></i>
                <p>
                    User
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.dapmenUser.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dapmenUser.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data User</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./User-->

            <!--UPT ITERA-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="fa-solid fa-building nav-icon"></i>
                <p>
                    ITERA
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.upt.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah UPT</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.upt.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data UPT</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./UPT ITERA-->

            <!--Prodi-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-satellite"></i>
                <p>
                    Prodi
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.prodi.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Prodi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.prodi.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data Prodi</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Prodi-->

            <!--Himpunan-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-people-roof"></i>
                <p>
                    Himpunan
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.himpunan.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Himpunan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.himpunan.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="font-size:0.9rem;">Kelola Data Himpunan</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Himpunan-->

            <!--UKM/Komunitas-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-people-carry-box"></i>
                <p>
                    UKM/Komunitas
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.ukm.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="font-size:0.8rem;">Tambah UKM/Komunitas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.ukm.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="font-size:0.8rem;">Kelola UKM/Komunitas</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./UKM/Komunitas-->

            <!--Booklet-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-book-open"></i>
                <p>
                    Booklet
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link tablinks" href="{{ route('admin.booklet.index') }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data Booklet</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Booklet-->

            <!--Begalin-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-brands fa-evernote"></i>
                <p>
                    Begalin
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.begalin.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Begalin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.begalin.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data Begalin</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Begalin-->

            <!--Kamus Gaul-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-brands fa-rocketchat"></i>
                <p>
                    Kamus Gaul
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.kamusgaul.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Kamus</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.kamusgaul.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Kamus Gaul</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Kamus Gaul-->

            @elseif(auth()->user()->roles_id == 3)
            <!--Dashboard-->
            <li class="nav-item">
                <a href="/himpunans" class="nav-link tablinks ">
                    <i class="fas fa-rocket nav-icon"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>
            <!--./Dashboard-->

            <!--Beranda-->
            <li class="nav-item">
                <a href="/beranda" class="nav-link">
                    <i class="fa-solid fa-earth-asia nav-icon"></i>
                    <p>
                    Home PPLK 2022
                    </p>
                </a>
            </li>
            <!--./Beranda-->

            <!--Prodi-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-satellite"></i>
                <p>
                    Prodi
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('himpunans.prodi.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Prodi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('himpunans.prodi.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data Prodi</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Prodi-->

            <!--Himpunan-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-people-roof"></i>
                <p>
                    Himpunan
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('himpunans.himpunan.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Himpunan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('himpunans.himpunan.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="font-size:0.9rem;">Kelola Data Himpunan</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Himpunan-->

        @elseif(auth()->user()->roles_id == 4)
            <!--Dashboard-->
            <li class="nav-item">
                <a href="/ukms" class="nav-link tablinks ">
                    <i class="fas fa-rocket nav-icon"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>
            <!--./Dashboard-->

            <!--Beranda-->
            <li class="nav-item">
                <a href="/beranda" class="nav-link">
                    <i class="fa-solid fa-earth-asia nav-icon"></i>
                    <p>
                    Home PPLK 2022
                    </p>
                </a>
            </li>
            <!--./Beranda-->

            <!--UKM/Komunitas-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-people-carry-box"></i>
                <p>
                    UKM/Komunitas
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('ukms.ukm.create') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="font-size:0.8rem;">Tambah UKM/Komunitas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ukms.ukm.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="font-size:0.8rem;">Kelola UKM/Komunitas</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./UKM/Komunitas-->

            <!--Scanner-->
            <li class="nav-item">
                <a href="/ukms/polling" class="nav-link">
                <i class="nav-icon fa-solid fa-camera"></i>
                <p>
                    Scanner Polling
                </p>
                </a>
            </li>
            <!--./Scanner-->

        @elseif(auth()->user()->roles_id == 5)
            <!--Dashboard-->
            <li class="nav-item">
                <a href="/kedis" class="nav-link tablinks ">
                    <i class="fas fa-rocket nav-icon"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>
            <!--./Dashboard-->

            <!--Beranda-->
            <li class="nav-item">
                <a href="/beranda" class="nav-link">
                    <i class="fa-solid fa-earth-asia nav-icon"></i>
                    <p>
                    Home PPLK 2022
                    </p>
                </a>
            </li>
            <!--./Beranda-->

            <!--Keluhan-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-receipt"></i>
                <p>
                    Keluhan
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('kedis.keluhan.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Keluhan</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./Keluhan-->

            <!--Scanner-->
            <li class="nav-item">
                <a href="/kedis/scanner" class="nav-link">
                <i class="nav-icon fa-solid fa-camera"></i>
                <p>
                    Scanner Staff
                </p>
                </a>
            </li>
            <!--./Scanner-->

            @elseif(auth()->user()->roles_id == 6)
            <!--Dashboard-->
            <li class="nav-item">
                <a href="/dapmen" class="nav-link tablinks ">
                    <i class="fas fa-rocket nav-icon"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>
            <!--./Dashboard-->

            <!--Beranda-->
            <li class="nav-item">
                <a href="/beranda" class="nav-link">
                    <i class="fa-solid fa-earth-asia nav-icon"></i>
                    <p>
                    Home PPLK 2022
                    </p>
                </a>
            </li>
            <!--./Beranda-->

            <!--User-->
            <li class="nav-item">
                <a class="nav-link tabitem">
                <i class="nav-icon fa-solid fa-user-astronaut"></i>
                <p>
                    User
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('dapmen.dapmenUser.index') }}" class="nav-link tablinks">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Data User</p>
                    </a>
                </li>
                </ul>
            </li>
            <!--./User-->

            <!--Scanner-->
            <li class="nav-item">
                <a href="/dapmen/presensiMaba" class="nav-link">
                <i class="nav-icon fa-solid fa-camera"></i>
                <p>
                    Scanner Presensi
                </p>
                </a>
            </li>
            <!--./Scanner-->

          @endif

          <div class="box_astronaut" onclick="window.location.href='https://instagram.com/fitrailyasa'" style="cursor: pointer;">
            <img class="object_astronaut" src="{{ asset('assets/astronaut.svg') }}" width="120px">
        </div>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->

  </aside>
  <!-- ./Main Sidebar Container -->
