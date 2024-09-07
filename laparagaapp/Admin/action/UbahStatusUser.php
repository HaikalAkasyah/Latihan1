<?php
    include('../connect.php');
    $id = $_GET['id'];
    $status = $_GET['status'];
    
    // Lakukan update status pengguna di database
    $qry = mysqli_query($koneksi, "UPDATE login SET status='$status' WHERE id_akun='$id'");
    
    // Periksa jika query berhasil atau tidak
    if($qry) {
        echo "Status berhasil diubah";
    } else {
        echo "Gagal mengubah status";
    }
?>