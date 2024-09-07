<?php
 include('../connect.php');
 $id = $_POST['txtEditId_admin'];
 $user = $_POST['txtEditusername'];
 $pass = $_POST['txtEditpass'];
 $nama = $_POST['txtEditnama'];
 $JK = $_POST['txtEditJenis_kelamin'];
 $almt = $_POST['txtEditAlamat'];
 $hp = $_POST['txtEditNo_hp'];
 $pemilik = $_POST['txtEditId_pemilik'];
 $qry = mysqli_query($koneksi,"update tbl_admin set id_admin='$id', username= '$user', pass='$pass', nama='$nama', Jenis_kelamin='$JK', Alamat='$almt', No_hp='$hp', Id_pemilik='$pemilik' where id_admin='$id'");
 if($qry)
 {
 ?>
 <script>
 alert("Selamat! Data berhasil diubah");
 window.location.href="../beranda.php?l=tbl_admin";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
 alert("Maaf! Data tidak berhasil diubah");
 window.location.href="../beranda.php?l=tbl_admin";
 </script>
 <?php
 }
?>
