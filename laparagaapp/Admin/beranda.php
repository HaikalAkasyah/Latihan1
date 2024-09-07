<?php
session_start ();
if (empty ($_SESSION['user']))
{
    ?>
    <script>
        window.location.href="login.php";
    </script>
    <?php
}
else
{
//session_start ();
$user = $_SESSION['user'];
$nik = $_SESSION['nik'];
$level = $_SESSION['hakAkses'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Laparaga </title>

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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        
        <div class="info" style="color:white">
            <?php echo ($user);?>
            <a href = "logout.php"> <i class="fas fa-power-off"></i></a>
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
      <?php
      if($level == "1")
      {
        include("AdminMenu.php");
      }
        else if ($level == "2")
      {
        include ("MenuMahasiswa.php");
      }
      else if ($level == "3")
      {
        include ("Menudosen.php");
      }
      else
      {
        include("logout.php");
      }
      ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
    $menu = $_GET['l'];
    if ($menu == 'lapangan')
    {
      include ("lapangan.php");
    }
    else if ($menu == 'fasilitas')
    {
      include ("fasilitas.php");
    }
    else if ($menu == 'pemilik')
    {
      include ("pemilik.php");
    }
    else if ($menu == 'booking')
    {
      include ("booking.php");
    }
    else if ($menu == 'registrasi')
    {
      include ("registrasi.php");
    }
    else if ($menu == 'tbl_admin')
    {
      include ("tbl_admin.php");
    }
    

?>
  </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023-2024 <a href="https://adminlte.io">Admin | Laparaga </a>.</strong>
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
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  // $(function () {
  //   $("#tblDataJurusan").DataTable({
  //     "responsive": true, "lengthChange": false, "autoWidth": false,
  //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
  //   }).buttons().container().appendTo('#tblDataJurusan_wrapper .col-md-6:eq(0)');
  //   // $('#example2').DataTable({
  //   //   "paging": true,
  //   //   "lengthChange": false,
  //   //   "searching": false,
  //   //   "ordering": true,
  //   //   "info": true,
  //   //   "autoWidth": false,
  //   //   "responsive": true,
  //   // });

  //   $("#tblDataProdi").DataTable({
  //     "responsive": true, "lengthChange": false, "autoWidth": false,
  //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
  //   }).buttons().container().appendTo('#tblDataProdi_wrapper .col-md-6:eq(0)');
  // });

  // SISIP DISINI UNTUK PENGECEKAN FORM TAMBAH DATA PEMILIK 
$(function()
{
  $('#frmTambahDatapemilik').on("submit", function(event)
  {
    event.preventDefault();
    if($('#txtId_pemilik').val() =="")
    {
      alert("Id Pemilik Harus Di isi");
    }
    else if ($('#txtnama_pemilik').val() =='')
    {
      alert("Nama Pemilik Harus Di isi");
    }
    else if ($('#txtAlamat').val() =='')
    {
      alert("Alamat pemilik harus di isi");
    }
    else if ($('#txtJenis_kelamin').val() =='')
    {
      alert("Jenis Kelamin Harus diisi");
    }
    else if ($('#txtNo_hp').val() =='')
    {
      alert("Nomor hp harus di isi");
    }
    else
    {
      $.ajax({
        url:"action/SimpanDataPemilik.php",
        method:"POST",
        data : $('#frmTambahDatapemilik').serialize(),
        beforeSend:function(){
          $('#btnSimpan').val("Sedang menyimpan..");
        },
        success : function(data){
          $('#frmTambahDatapemilik') [0].reset();
          $('#modalTambahDatapemilik').modal('hide');
          $('#tblDatapemilik').html(data);
        }
      });
    }
  });
});

  // SISIP DISINI UNTUK PENGECEKAN FORM TAMBAH DATA LAPANGAN
  $(function()
{
  $('#frmTambahDataLapangan').on("submit", function(event)
  {
    event.preventDefault();
    if($('#txtId_lapangan').val() =="")
    {
      alert("Id Lapangan Harus Di isi");
    }
    else if ($('#txtNama_lapangan').val() =='')
    {
      alert("Nama Lapangan Harus Di isi");
    }
    else if ($('#txtalamat').val() =='')
    {
      alert("Alamat harus di isi");
    }
    else if ($('#txtId_pemilik').val() =='')
    {
      alert("Id pemilik Harus diisi");
    }
    else
    {
      $.ajax({
        url:"action/SimpanDataLapangan.php",
        method:"POST",
        data : $('#frmTambahDataLapangan').serialize(),
        beforeSend:function(){
          $('#btnSimpan').val("Sedang menyimpan..");
        },
        success : function(data){
          $('#frmTambahDataLapangan') [0].reset();
          $('#modalTambahDatalapangan').modal('hide');
          $('#tblDataLapangan').html(data);
        }
      });
    }
  });
});

// SISIP DISINI UNTUK PENGECEKAN FORM TAMBAH DATA FASILITAS
$(function()
{
  $('#frmTambahDataFasilitas').on("submit", function(event)
  {
    event.preventDefault();
    if($('#txtId_fasilitas').val() =="")
    {
      alert("Id Fasilitas Harus Di isi");
    }
    else if ($('#txtNama_fasilitas').val() =='')
    {
      alert("Nama Fasilitas Harus Di isi");
    }
    else if ($('#txtketerangan').val() =='')
    {
      alert("Keterangan harus di isi");
    }
    else if ($('#txtId_lapangan').val() =='')
    {
      alert("Id Lapangan Harus diisi");
    }
    else
    {
      $.ajax({
        url:"action/SimpanDataFasilitas.php",
        method:"POST",
        data : $('#frmTambahDataFasilitas').serialize(),
        beforeSend:function(){
          $('#btnSimpan').val("Sedang menyimpan..");
        },
        success : function(data){
          $('#frmTambahDataFasilitas') [0].reset();
          $('#modalTambahDataFasilitas').modal('hide');
          $('#tblDataFasilitas').html(data);
        }
      });
    }
  });
});

// SISIP DISINI UNTUK PENGECEKAN FORM TAMBAH DATA BOOKING
$(function()
{
  $('#frmTmbhDataBooking').on("submit", function(event)
  {
    event.preventDefault();
    if($('#txtId_booking').val() =="")
    {
      alert("Id Booking Harus Di isi");
    }
    else if ($('#txtTgl_booking').val() =='')
    {
      alert("Tanggal Booking Harus Di isi");
    }
    else if ($('#txtjam_main').val() =='')
    {
      alert("Jam main harus di isi");
    }
    else if ($('#durasi').val() =='')
    {
      alert("Durasi Harus diisi");
    }
    else if ($('#txtId_lapangan').val() =='')
    {
      alert("Id Lapangan harus di isi");
    }
    else if ($('#txtMetode_pembayaran').val() =='')
    {
      alert("pembayaran harus diisi");
    }
    else if ($('#txtbukti').val() =='')
    {
      alert("Bukti harus di isi");
    }
    else if ($('#txtstatus').val() =='')
    {
      alert("Status harus di isi");
    }
    else
    {
      $.ajax({
        url:"action/SimpanDataBooking.php",
        method:"POST",
        data : $('#frmTmbhDataBooking').serialize(),
        beforeSend:function(){
          $('#btnSimpan').val("Sedang menyimpan..");
        },
        success : function(data){
          $('#frmTmbhDataBooking') [0].reset();
          $('#modalTambahDatabooking').modal('hide');
          $('#tblDataBooking').html(data);
        }
      });
    }
  });
});

// SISIP DISINI UNTUK PENGECEKAN FORM TAMBAH DATA REGISTRASI 
$(function()
{
  $('#frmTambahDataregistrasi').on("submit", function(event)
  {
    event.preventDefault();
    if($('#txtId_registrasi').val() =="")
    {
      alert("Id Registrasi Harus Di isi");
    }
    else if ($('#txtusername').val() =='')
    {
      alert("Username Harus Di isi");
    }
    else if ($('#txtpassword').val() =='')
    {
      alert("Password harus di isi");
    }
    else if ($('#txtAlamat').val() =='')
    {
      alert("Alamat Harus diisi");
    }
    else if ($('#txtNama_pelanggan').val() =='')
    {
      alert("Nama pelanggan harus di isi");
    }
    else if ($('#txtNo_hp').val() =='')
    {
      alert("Nomor Handphone harus di isi");
    }
    else
    {
      $.ajax({
        url:"action/SimpanDataRegistrasi.php",
        method:"POST",
        data : $('#frmTambahDataregistrasi').serialize(),
        beforeSend:function(){
          $('#btnSimpan').val("Sedang menyimpan..");
        },
        success : function(data){
          $('#frmTambahDataregistrasi') [0].reset();
          $('#modalTambahDataregistrasi').modal('hide');
          $('#tblDataRegistrasi').html(data);
        }
      });
    }
  });
});

// SISIP DISINI UNTUK PENGECEKAN FORM TAMBAH DATA ADMIN
$(function()
{
  $('#frmTambahDataAdmin').on("submit", function(event)
  {
    event.preventDefault();
    if($('#txtId_Admin').val() =="")
    {
      alert("Id ADMIN Harus Di isi");
    }
    else if ($('#txtusername').val() =='')
    {
      alert("Username Harus Di isi");
    }
    else if ($('#txtpassword').val() =='')
    {
      alert("Password harus di isi");
    }
    else if ($('#txtNama').val() =='')
    {
      alert("Nama Harus diisi");
    }
    else if ($('#txtJeniskelamin').val() =='')
    {
      alert("Jenis kelamin harus di isi");
    }
    else if ($('#txtAlamat').val() =='')
    {
      alert("Alamat harus di isi");
    }
    else if ($('#txtHP').val() =='')
    {
      alert("No HP harap diisi");
    }
    else if ($('#txtId_pemilik').val() =='')
    {
      alert("Id pemilik harap di isi");
    }
    else
    {
      $.ajax({
        url:"action/SimpanDataAdmin.php",
        method:"POST",
        data : $('#frmTambahDataAdmin').serialize(),
        beforeSend:function(){
          $('#btnSimpan').val("Sedang menyimpan..");
        },
        success : function(data){
          $('#frmTambahDataAdmin') [0].reset();
          $('#modalTambahDataAdmin').modal('hide');
          $('#tblDataAdmin').html(data);
        }
      });
    }
  });
});
// SISIP DISINI UNTUK PENGECEKAN FORM TAMBAH DATA PRODI
// $(function()
// {
//   $('#frmTambahDataProdi').on("submit", function(event)
//   {
//     event.preventDefault();
//     if($('#txtkodeProdi').val() == '')
//     {
//       alert("Kode Program Studi Harus Di isi");
//     }
//     else if($('#txtnamaProdi').val() =='')
//     {
//       alert("Nama Program Studi harus DI isi");
//     }
//     else if ($("select[name=cmbJurusan]").val() == 'pilih')
//     {
//       alert("Jurusan harus di pilih");
//     }
//     else
//     {
//       $.ajax({ 
//         url:"action/SimpanDataProdi.php", 
//         method:"POST", 
//         data:$('#frmTambahDataProdi').serialize(), 
//         beforeSend:function(){ 
//         $('#btnSimpan').val("Sedang menyimpan.."); 
//         }, 
//         success:function(data){ 
//         $('#frmTambahDataProdi')[0].reset(); 
//         $('#modalTambahDataProdi').modal('hide'); 
//         $('#tblDataProdi').html(data); 
//         }
//      });
//     }
//   });
// });
</script>
</body>
</html>

<?php
}
?>