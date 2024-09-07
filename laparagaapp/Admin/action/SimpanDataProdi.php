<?php
include('../connect.php');
$kode = $_POST['txtkodeProdi'];
$nama = $_POST['txtnamaProdi'];
$kodeJurusan = $_POST['cmbJurusan'];
$qry = mysqli_query($koneksi,"insert into tblprodi(kodeProdi,namaProdi,kodeJurusan) 
values ('$kode','$nama','$kodeJurusan')");
if($qry)
{
 ?>
<script>
 alert("Selamat! Data berhasil disimpan");
 window.location.href="beranda.php?m=prodi";
</script>
<?php
}
else
{
    ?>
    <script>
        alert("Maaf! Data tidak berhasil disimpan");
        window.location.href="beranda.php?m=prodi";
 </script>
 <?php
}
?>