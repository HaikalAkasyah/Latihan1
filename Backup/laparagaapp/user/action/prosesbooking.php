
<?php
include("../connect.php");

if (isset($_POST['submit'])) {
    // Get data from the form
    $Id_lap = $_POST['cmbLap'];
    $tgl = date ('Y-m-d', strtotime($_POST['tgl_booking']));
    $jam_main = $_POST['jam_main'];
    $durasi = $_POST['durasi'];
    $metode = $_POST['pembayaran'];

    $target_dir = "pembayaran/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1000;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 300000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";

            // Create the query for database insertion
            $buktiFileName = basename($_FILES["fileToUpload"]["name"]);
            $qry = "INSERT INTO booking (`Tgl_booking`, `jam_main`, `durasi`, `Id_lapangan`, `metode_bayar`, `bukti_bayar`) VALUES ($tgl, '$jam_main', '$durasi', '$Id_lap', '$metode', '$buktiFileName')";
            $query = mysqli_query($koneksi, $qry);

            // Check if the query was successful
            if ($query) {
                // Display JavaScript alert and redirect on success
                ?>
                <script>
                    var isConfirmed = window.confirm("Apakah data Anda sudah benar?");
                    if (isConfirmed) {
                        alert("Pendaftaran Berhasil!");
                        window.location.href = '../home.php';
                    } else {
                        alert("boking berhasil, tetapi Anda membatalkan pengiriman.");
                        window.location.href = '../boking.php';
                    }
                </script>
                <?php
            } else {
                // Display JavaScript alert and redirect on failure
                ?>
                <script>
                    alert("Maaf! boking Tidak Berhasil");
                    window.location.href = '../boking.php';
                </script>
                <?php
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    // Access denied if the form wasn't submitted
    die("Akses dilarang...");
}
?>
