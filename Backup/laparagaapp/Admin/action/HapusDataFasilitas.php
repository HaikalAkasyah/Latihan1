<?php
 include('../connect.php');
 $id = $_GET['id'];
 $qry = mysqli_query($koneksi,"delete from fasilitas where Id_fasilitas='$id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil dihapus");
 window.location.href="../beranda.php?l=fasilitas";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil dihapus");
 window.location.href="../beranda.php?l=fasilitas";
 </script>
 <?php
 }
?>