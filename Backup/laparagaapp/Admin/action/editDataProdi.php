<?php
 include('../connect.php');
 $id = $_GET['id'];
 $kode = $_POST['txtEditKodeProdi'];
 $nama = $_POST['txtEditNamaProdi'];
 $kodeJurusan = $_POST['cmbJurusan'];
 $qry = mysqli_query($koneksi,"update tblprodi set kodeProdi='$kode', namaProdi = 
'$nama', kodeJurusan = '$kodeJurusan' where kodeProdi='$id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil diubah");
 window.location.href="../beranda.php?m=prodi";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil diubah");
 window.location.href="../beranda.php?m=prodi";
 </script>
 <?php
 }
?>