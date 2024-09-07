<?php
    include('../connect.php');
    $kode = $_POST['txtkodeJurusan'];
    $nama = $_POST['txtnamaJurusan'];
    $qry = mysqli_query($koneksi,"insert into tbljurusan(kodeJurusan,namaJurusan) values ('$kode','$nama')");
    if($qry)
    {
        ?>
 <script>
alert("Selamat! Data berhasil disimpan");
 window.location.href="../beranda.php?m=jurusan";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
    alert("Maaf! Data tidak berhasil disimpan");
    window.location.href="../beranda.php?m=jurusan";
 </script>
 <?php
 }
?>