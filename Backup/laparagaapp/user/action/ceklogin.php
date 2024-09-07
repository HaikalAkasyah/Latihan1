<?php
include("../connect.php");
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = mysqli_real_escape_string($koneksi, $_POST["userName"]);
    $password = mysqli_real_escape_string($koneksi, $_POST["password"]);

    // Validate user credentials using prepared statement
    $query = "SELECT * FROM registrasi WHERE username=? AND password=?";
    $stmt = mysqli_prepare($koneksi, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        // Check if a matching user is found
        if (mysqli_stmt_num_rows($stmt) == 1) {
            // Set session variable for the logged-in user
            $_SESSION["username"] = $username;

            // Redirect using JavaScript
            header("Location: ../home_user.php");
            exit();
        } else {
            echo "Invalid username or password";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Close the database connection
    mysqli_close($koneksi);
}
?>
