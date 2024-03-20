<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    tr{
      display: flex;
      align-content: center;
    }
    table{
      margin-left: auto;
    }
    td{
      margin-left: 10px;
    }
    th{
      margin-left: 10px;
    }
    input{
      margin-right: 1px;
    }
    label{
      margin-right: 10px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav style="display: flex;justify-content: space-between;" class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="HalamanUtama.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
  </div>

    <!-- Right navbar links -->
    <div style="display: flex; justify-content:end;">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="login.html" class="nav-link">Login</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="register.html" class="nav-link">Register</a>
      </li>
    </div>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SISTA-Backend</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Tugas Akhir</a>
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="HalamanUtama.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><b>Seminar TA</b> <i class="right fas fa-angle-right"></i></p>
                </a>
              </li>
              <p style="color: white;">___________</p>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><b>Mahasiswa</b></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><b>Dosen</b></p>
                </a>
              </li>
              <p style="color: white;">___________</p>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><b>logout</b></p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <div class="content-wrapper">
    <div style="display: flex;justify-content: center;">
      <h1 style="text-shadow: yellowgreen 1px 2px 2px ;">Sistem Informasi Seminar Tugas Akhir - SISTA</h1>
    </div>
    <!-- Content Header (Page header) -->
    <div class="content-header" style="padding-left: 875px;">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="HalamanUtama.html">Home</a></li>
              <li class="breadcrumb-item"><a href="slide7.html">Jadwal</a></li>
              <li class="breadcrumb-item"><a href="slide9.html">Daftar Seminar</a></li>
              <li class="breadcrumb-item"><a href="slide6.html">Daftar Peserta</a></li>
            </ol>
    </div>
    <div class="samping" style="padding-left: 40px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
      <p class="fs-5"><b>Mahasiswa Seminar</b> <span style="padding-left: 10px;">: </span><span style="padding-left: 10px;">Diego Armando (0102002)</span></p>
      <p class="fs-5"><b>Judul</b> <span style="padding-left: 117px;">:</span> <span style="padding-left: 10px;">Rancang Bangun Aplikasi Seminar Tugas Akhir Berbaris Web Menggunakan MVC Framework</span></p>
      <p class="fs-5"><b>Waktu</b> <span style="padding-left: 107px;">:</span> <span style="padding-left: 10px;">Senin, 4 Januari 2021, 10:00</span></p>
    </div>
    <div class="judul" style="border: 2px solid black; width: 180px; height: 30px; margin-left: 40px; text-align: center; margin-top: 20px; border-bottom: 0px; border-radius: 5px 5px 0px 0px; background-color: rgb(191, 255, 142);">
      <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; padding-top: 2px;">Form Daftar Seminar TA</p>
    </div>
          <div class="bungkus" style=" border: 2px solid black; width: 500px; height: 290px; margin-left: 40px; padding-right: 60px; padding-top: 20px; background-color: rgb(255, 254, 221);">
                  <div class="samping3" >
                  <table>
                    <tr>
                      <th>Nim</th>
                      <td style="margin-left: 42px;"><p> : </p></td>
                      <td><input type="number"></td>
                    </tr>
                    <tr>
                      <th>Nama</th>
                      <td style="margin-left: 30px;"><p> : </p></td>
                      <td><input type="text"></td>
                    </tr>
                    <tr>
                      <th>Prodi </th>
                      <td style="margin-left: 34px;"><p> : </p></td>
                      <td>
                        <select style="height: 28px; width: 185px;">
                          <option value="">Sistem Informasi</option>
                          <option value="">Tehnik Informatika</option>
                          <option value="">Bisnis Digital</option>
                         </select>
                      </td>
                    </tr>
                    <tr>
                      <th>Program </th>
                      <td><p> : </p></td>
                      <td style="display: flex; align-content: center;justify-content: space-between;">
                        <div>
                          <input type="radio" name="" id="">
                          <label for="">D3</label>
                        </div>
                        <div>
                          <input type="radio" name="" id="">
                          <label for="">S1 Reguler</label>
                        </div>
                        <div>
                          <input type="radio" name="" id="">
                          <label for="">S1 Fost Trackt</label>
                        </div>
                        <div>
                          <input type="radio" name="" id="">
                          <label for="">S2</label>
                        </div>
                      </td>
                    </tr>
                  </table>
                  <p style="border: 2px solid black; width: 100px; height: 30px; margin-left: 30px; text-align: center; box-shadow: 2px 2px 2px black; margin-top: 20px; background-color: rgb(191, 255, 142);; "><a href="HalamanUtama.html" style="color: black; font-family:Georgia, 'Times New Roman', Times, serif; ">Daftar</a></p>
              </div>
          </div>
          
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>
    <!-- /.content-header -->
    <!-- /.content -->
  </div>
  
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>