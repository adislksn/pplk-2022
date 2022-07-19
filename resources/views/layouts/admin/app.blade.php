<!DOCTYPE html>
<html lang="id">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="theme-color" content="#09f" />
        <meta name="description" content="DESKRIPSI" />
        <meta name="keywords" content="KATA KUNCI" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="author" content="Fitra Ilyasa" />
        <meta name="copyright" content="PPLK 2022" />
        <meta name="robots" content="follow" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:type" content="cms website" />
        <meta property="og:title" content="CMS Website PPLK 2022" />
        <meta property="og:url" content="URL" />
        <link rel="manifest" href="./manifest.webmanifest" />

        <title>@yield('title') - PPLK 2022</title>

        <!-- Sans Pro Backup -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Theme Style -->
        <link rel="stylesheet" href="{{ asset('assets/css/adminlte.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fix-cms.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    </head>
    <body class="hold-transition sidebar-mini">
      <div class="wrapper">

      @include('layouts.admin.menu')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- ./Content Header -->

        @yield('content')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
          <div class="p-3">
            <h5>Shortcut Link</h5>
            <a href="#" class="text-decoration-none">Content</a>
          </div>
        </aside>
        <!-- /.Control Sidebar -->

        <!-- Footer -->
        <footer class="main-footer">
          <!-- Tagline PPLK 2022 -->
          <div class="float-right d-none d-sm-inline">
            <i>#Merakit_Cita_Dari_Kita_Untuk_Sumatera</i>
          </div>
          <!-- Copyright href ke page Our Team -->
          <strong>Copyright &copy; 2022 <a href="#" class=" text-decoration-none">ARDHAMES PPLK-2022</a>.</strong> All rights reserved.
        </footer>
        <!-- ./Footer -->
      </div>
      <!-- ./wrapper -->

      <!-- Tempat Scripts -->
      <script>
        function openCMS(evt, menuName) {
          var i, tabitem, tabcontents, tablinks;
          tabitem = document.getElementsByClassName("tabitem");
          tabcontents = document.getElementsByClassName("tabcontents");
          for (i = 0; i < tabcontents.length; i++) {
            tabcontents[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(menuName).style.display = "block";
          evt.currentTarget.className += " active";
        }
      </script>
      @yield('script')

      <!-- jQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- AdminLTE App js-->
      <script src="{{ asset('assets/js/adminlte.js') }}"></script>
      <script src="{{ asset('assets/js/adminlte.js.map') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    </body>
</html>