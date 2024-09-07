<?php
 include('../connect.php');
 $Id = $_POST['txtEditId_booking'];
 $tgl = $_POST['txtEditTgl_booking'];
 $jam_m = $_POST['txtEditJam_main'];
 $durasi = $_POST['txtEditDurasi'];
 $Id_lap = $_POST['txtEditId_lapangan'];
 $metode = $_POST['txtEditmetode_bayar'];
 $bukti = $_POST['txtEditbukti'];
 $status = $_POST['txtEditStatus'];
 $qry = mysqli_query($koneksi,"update booking set Id_booking='$Id', Tgl_booking= '$tgl', jam_main ='$jam_m', durasi='$durasi', Id_lapangan='$Id_lap', metode_bayar='$metode', bukti_bayar='$bukti', Status='$status' where Id_booking='$Id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil diubah");
 window.location.href="../beranda.php?l=booking";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil diubah");
 window.location.href="../beranda.php?l=booking";
 </script>
 <?php
 }
?>