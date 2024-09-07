<?php

include("../connect.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $nama = $_POST['nama_pembooking'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $no = $_POST['no_hp'];
    $email = $_POST['email'];
    // buat query
    $sql = "INSERT INTO registrasi (nama_pembooking, username, password, no_hp, email) VALUES ('$nama', '$user', '$pass', '$no', '$email')";
    $query = mysqli_query($koneksi, $sql);

    // Kirim email aktivasi
    /*
    $activationLink = "http://localhost/Digian//aktivasi.php?email=" . urlencode($email);
    $message = "Halo $nama,\n\nTerima kasih telah mendaftar. Aktifkan akun Anda dengan mengklik tautan berikut:\n$activationLink";
    $subject = "Aktivasi Akun";
    $headers = "From: dovikaloo666@gmail.com";
    

    mail($email, $subject, $message, $headers);
*/
    // Tampilkan pesan sukses ke pengguna...

    // apakah query simpan berhasil?
    if( $query ) {
        ?>
        <script>
            alert("Registrasi Akun Berhasil")
            window.location.href="../Login.php";
        </script>
        <?php
    } 
    else{
        ?>
        <script>
        alert("Registrasi Akun Tidak Berhasil")
        window.location.href="../registrasi.php";
        </script>
        <?php
    }


}   
    else {
    die("Akses dilarang...");
}

?>
