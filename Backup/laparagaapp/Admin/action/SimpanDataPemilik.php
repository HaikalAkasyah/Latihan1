<?php
    include('../connect.php');
    $Id = $_POST['txtId_pemilik'];
    $nama = $_POST['txtnama_pemilik'];
    $alamat = $_POST['txtAlamat'];
    $jk = $_POST['txtJenis_kelamin'];
    $No_hp = $_POST['txtNo_hp'];
    $qry = mysqli_query($koneksi,"insert into pemilik (Id_pemilik,Nama_pemilik,Alamat,Jenis_kelamin,No_hp) values ('$Id','$nama', '$alamat', '$jk', '$No_hp')");
    if($qry)
    {
        ?>
 <script>
alert("Selamat! Data berhasil disimpan");
 window.location.href="../beranda.php?l=pemilik";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
    alert("Maaf! Data tidak berhasil disimpan");
    window.location.href="../beranda.php?l=pemilik";
 </script>
 <?php
 }
?>