<?php
include("../connect.php");

if (isset($_POST['submit'])) {
    // Get data from the form
    $Id_lap = $_POST['cmbLap'];
    $tgl = date('Y-m-d', strtotime($_POST['tgl_booking']));
    $jam_main = $_POST['jam_main'];
    $durasi = $_POST['durasi'];
    $metode = $_POST['pembayaran'];

    $target_dir = "pembayaran/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == UPLOAD_ERR_OK) {
        $imagePath = $_FILES['fileToUpload']['tmp_name'];

        // Ensure image path is not empty
        if (!empty($imagePath)) {
            $imageSize = getimagesize($imagePath);

            if ($imageSize !== false) {
                // Valid image
                echo "Gambar valid.";
            } else {
                echo "File bukan gambar yang valid.";
                $uploadOk = 0;
            }
        } else {
            echo "Path gambar kosong.";
            $uploadOk = 0;
        }
    } else {
        echo "Gambar tidak berhasil diupload.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";

            // Sanitize and prepare input data
            $tgl = mysqli_real_escape_string($koneksi, $tgl);
            $jam_main = mysqli_real_escape_string($koneksi, $jam_main);
            $durasi = mysqli_real_escape_string($koneksi, $durasi);
            $Id_lap = mysqli_real_escape_string($koneksi, $Id_lap);
            $metode = mysqli_real_escape_string($koneksi, $metode);
            $buktiFileName = mysqli_real_escape_string($koneksi, basename($_FILES["fileToUpload"]["name"]));

            // Create the query for database insertion
            $qry = "INSERT INTO booking (`Tgl_booking`, `jam_main`, `durasi`, `Id_lapangan`, `metode_bayar`, `bukti_bayar`) 
                    VALUES ('$tgl', '$jam_main', '$durasi', '$Id_lap', '$metode', '$buktiFileName')";

            $query = mysqli_query($koneksi, $qry);

            // Check if the query was successful
            if ($query) {
                echo '<script>
                        var isConfirmed = window.confirm("Apakah data Anda sudah benar?");
                        if (isConfirmed) {
                            alert("Pendaftaran Berhasil!");
                            window.location.href = "../home.php";
                        } else {
                            alert("Booking berhasil, tetapi Anda membatalkan pengiriman.");
                            window.location.href = "../boking.php";
                        }
                      </script>';
            } else {
                echo "Error: " . mysqli_error($koneksi);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    die("Akses dilarang...");
}
?>
