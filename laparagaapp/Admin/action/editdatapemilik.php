<?php
 include('../connect.php');
 $id = $_POST['txtEditId_pemilik'];
 $nama = $_POST['txtEditNama_pemilik'];
 $Alamat = $_POST['txtEditAlamat'];
 $jk = $_POST['txtEditJenis_kelamin'];
 $hp = $_POST['txtEditNo_hp'];
 $qry = mysqli_query($koneksi,"update pemilik set Id_pemilik='$id', Nama_pemilik= '$nama', Alamat='$Alamat', Jenis_kelamin='$jk', No_hp='$hp' where Id_pemilik='$id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil diubah");
 window.location.href="../beranda.php?l=pemilik";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil diubah");
 window.location.href="../beranda.php?l=pemilik";
 </script>
 <?php
 }
?>