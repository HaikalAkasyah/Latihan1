<?php
    include('../connect.php');
    $id = $_POST['txtId_registrasi'];
    $name = $_POST['txtusername'];
    $pass = $_POST['txtpassword'];
    $alamat = $_POST['txtAlamat'];
    $plngn = $_POST['txtNama_pelanggan'];
    $hp = $_POST['txtNo_hp'];
    $qry = mysqli_query($koneksi,"insert into registrasi(Id_registrasi,username,password,Alamat,Nama_pelanggan,No_Hp) values ('$id','$name', '$pass', '$alamat', '$plngn', '$hp')");
    if($qry)
    {
        ?>
 <script>
alert("Selamat! Data berhasil disimpan");
 window.location.href="../beranda.php?l=registrasi";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
    alert("Maaf! Data tidak berhasil disimpan");
    window.location.href="../beranda.php?l=registrasi";
 </script>
 <?php
 }
?>