<?php
    include('../connect.php');
    $id = $_POST['txtId_lapangan'];
    $nama = $_POST['txtNama_lapangan'];
    $alamat = $_POST['txtalamat'];
    $pemilik = $_POST['txtId_pemilik'];
    $qry = mysqli_query($koneksi,"insert into lapangan(Id_lapangan,Nama_lapangan,alamat,Id_pemilik) values ('$id','$nama', '$alamat', '$pemilik')");
    if($qry)
    {
        ?>
 <script>
alert("Selamat! Data berhasil disimpan");
 window.location.href="../beranda.php?l=lapangan";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
    alert("Maaf! Data tidak berhasil disimpan");
    window.location.href="../beranda.php?l=lapangan";
 </script>
 <?php
 }
?>