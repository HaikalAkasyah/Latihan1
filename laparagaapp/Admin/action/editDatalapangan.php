<?php
 include('../connect.php');
 $id = $_POST['txtEditId_lapangan'];
 $nama = $_POST['txtEditNama_lapangan'];
 $almt = $_POST['txtEditalamat'];
 $Idpemilik = $_POST['txtEditId_pemilik'];
 $qry = mysqli_query($koneksi,"update lapangan set Id_lapangan='$id', Nama_lapangan= '$nama', alamat='$almt', Id_pemilik='$Idpemilik' where Id_lapangan='$id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil diubah");
 window.location.href="../beranda.php?l=lapangan";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil diubah");
 window.location.href="../beranda.php?l=lapangan";
 </script>
 <?php
 }
?>