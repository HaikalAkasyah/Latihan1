<?php
 include('../connect.php');
 $id = $_GET['id'];
 $qry = mysqli_query($koneksi,"delete from registrasi where Id_registrasi='$id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil dihapus");
 window.location.href="../beranda.php?l=registrasi";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil dihapus");
 window.location.href="../beranda.php?l=registrasi";
 </script>
 <?php
 }
?>