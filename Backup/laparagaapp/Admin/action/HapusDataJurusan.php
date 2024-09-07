<?php
 include('../connect.php');
 $id = $_GET['id'];
 $qry = mysqli_query($koneksi,"delete from tbljurusan where kodeJurusan='$id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil dihapus");
 window.location.href="../beranda.php?m=jurusan";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil dihapus");
 window.location.href="../beranda.php?m=jurusan";
 </script>
 <?php
 }
?>