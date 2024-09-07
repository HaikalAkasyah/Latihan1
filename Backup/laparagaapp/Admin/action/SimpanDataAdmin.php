<?php
    include('../connect.php');
    $id = $_POST['txtId_Admin'];
    $user = $_POST['txtusername'];
    $pass = $_POST['txtpassword'];
    $Nama = $_POST['txtNama'];
    $JK = $_POST['txtJeniskelamin'];
    $Almt = $_POST['txtAlamat'];
    $HP = $_POST['txtHP'];
    $Pemilik = $_POST['txtId_pemilik'];
    $qry = mysqli_query($koneksi,"insert into tbl_admin(id_admin,username,pass,nama,Jenis_kelamin,Alamat,No_hp,Id_pemilik) 
    values ('$id','$user', '$pass', '$Nama', '$JK', '$Almt', '$HP','$Pemilik')");
    if($qry)
    {
        ?>
 <script>
alert("Selamat! Data berhasil disimpan");
 window.location.href="../beranda.php?l=tbl_admin";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
    alert("Maaf! Data tidak berhasil disimpan");
    window.location.href="../beranda.php?l=tbl_admin";
 </script>
 <?php
 }
?>