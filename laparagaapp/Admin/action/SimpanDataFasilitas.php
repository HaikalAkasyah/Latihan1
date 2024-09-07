<?php
    include('../connect.php');
    $id = $_POST['txtId_fasilitas'];
    $nama = $_POST['txtNama_fasilitas'];
    $ket = $_POST['txtketerangan'];
    $lapangan = $_POST['txtId_lapangan'];
    $qry = mysqli_query($koneksi,"insert into fasilitas(Id_fasilitas,Nama_fasilitas,Keterangan,Id_lapangan) values ('$id','$nama', '$ket', '$lapangan')");
    if($qry)
    {
        ?>
 <script>
alert("Selamat! Data berhasil disimpan");
 window.location.href="../beranda.php?l=fasilitas";
 </script>
 <?php
 }
 else
 {
 ?>
 <script>
    alert("Maaf! Data tidak berhasil disimpan");
    window.location.href="../beranda.php?l=fasilitas";
 </script>
 <?php
 }
?>