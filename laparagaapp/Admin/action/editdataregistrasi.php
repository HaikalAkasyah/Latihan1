<?php
 include('../connect.php');
 $id = $_GET['id'];
 $kode = $_POST['txtEditId_registrasi'];
 $user = $_POST['txtEditUsername'];
 $pass = $_POST['txtEditPassword'];
 $almt = $_POST['txtEditAlamat'];
 $plngn = $_POST['txtEditNama_pelanggan'];
 $Hp= $_POST['txtEditNo_hp'];
 $qry = mysqli_query($koneksi,"update registrasi set Id_registrasi='$kode', username= '$user', password='$pass', Alamat='$almt', Nama_pelanggan='$plngn', No_Hp='$Hp' where Id_registrasi='$id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil diubah");
 window.location.href="../beranda.php?l=registrasi";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil diubah");
 window.location.href="../beranda.php?l=registrasi";
 </script>
 <?php
 }
?>