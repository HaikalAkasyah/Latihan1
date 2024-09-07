<?php
     include('../connect.php');
     $Id = $_POST['txtId_booking'];
     $tgl = $_POST['txtTgl_booking'];
     $jam_m = $_POST['txtJam_main'];
     $durasi = $_POST['txtdurasi'];
     $Id_lap = $_POST['txtId_lapangan'];
     $metode = $_POST['txtMetode_pembayaran'];
     $bukti= $_POST['txtbukti'];
     $status = $_POST['txtstatus'];
     $qry = mysqli_query($koneksi,"insert into booking  (Id_booking, Tgl_booking, jam_main, Durasi, Id_lapangan, metode_bayar, Status) values 
     ('$Id','$tgl', '$jam_m', '$durasi','$Id_lap', '$metode', '$bukti', '$status',");
     if($qry)
     {
     ?>
     <script>
alert("Selamat! Data berhasil disimpan");
 window.location.href="../beranda.php?l=booking";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
    alert("Maaf! Data tidak berhasil disimpan");
    window.location.href="../beranda.php?l=booking";
 </script>
 <?php
 }
?>