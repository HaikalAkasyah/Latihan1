<?php

// deklarasi + inisialisasi variabel
if (!isset($_POST['txtusername']) || !isset($_POST['txtpassword'])) {
    session_start(); // memulai session
    session_unset(); // tidak mengatur session
    session_destroy(); // menghapus session
    ?>
    <script>
        window.location.href="../login.php";
    </script>
    <?php
} else {
    // panggil file koneksi
    include("../connect.php"); // nama file disesuaikan 
    $nama = $_POST['txtusername'];
    $pass = md5($_POST['txtpassword']);
    
    // Cek koneksi ke database
    if ($koneksi === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $qry = mysqli_query($koneksi, "SELECT * FROM tbl_login WHERE username = '$nama' AND password = '$pass'");

    // Cek apakah query berhasil
    if (!$qry) {
        die("ERROR: Could not execute query: $qry. " . mysqli_error($koneksi));
    }

    $row = mysqli_fetch_array($qry);
    if ($row) {
        session_start();
        // kiri(sesuai programer) = kanan (dari database)
        $_SESSION['hakAkses'] = $row['level'];
        $_SESSION['user'] = $row['username'];
        $_SESSION['nik'] = $row['nik'];
        ?>
        <script>
            window.location.href="../beranda.php";
        </script>
        <?php
    } else {
        session_start();
        session_unset();
        session_destroy();
        ?>
        <script>
            window.location.href="../login.php";
        </script>
        <?php
    }
}
?>
