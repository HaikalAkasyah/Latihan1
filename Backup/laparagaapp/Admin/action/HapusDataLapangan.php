<?php
 include('../connect.php');
 $id = $_GET['id'];
 $qry = mysqli_query($koneksi,"delete from lapangan where Id_lapangan='$id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil dihapus");
 window.location.href="../beranda.php?l=lapangan";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil dihapus");
 window.location.href="../beranda.php?l=lapangan";
 </script>
 <?php
 }
?>