<?php
 include('../connect.php');
 $id = $_POST['txtEditId_fasilitas'];
 $nama = $_POST['txtEditNamafasilitas'];
 $ket = $_POST['txtEditKeterangan'];
 $lap = $_POST['txtEditLapangan'];
 $qry = mysqli_query($koneksi,"update fasilitas set Id_fasilitas='$id', Nama_fasilitas= '$nama', Keterangan='$ket', Id_lapangan='$lap' where Id_fasilitas='$id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil diubah");
 window.location.href="../beranda.php?l=fasilitas";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil diubah");
 window.location.href="../beranda.php?l=fasilitas";
 </script>
 <?php
 }
?>