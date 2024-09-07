<?php
                  include('connect.php');
                  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Form</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    /* Add custom styles here if needed */
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    .btn-primary {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <h2>Booking Form</h2>
  <form action="action/prosesbooking.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="cmbLap">Pilih Lapangan:</label>
    <select name="cmbLap" class="form-control" style="width: 100%;">
     <option value="pilih">- Pilih -</option>
                <?php
                $qry = mysqli_query($koneksi, "select * from lapangan order by Id_lapangan ASC");
                while($row= mysqli_fetch_array($qry))
                {
                  ?>
                  <option value="<?php echo $row['Id_lapangan'];?>"><?php echo $row['Id_lapangan'];?></option>  
                  <?php    
                }
                ?>
              </select>
              <br/>

    <div class="form-group">
      <label for="tgl_booking">Tanggal Booking:</label>
      <input type="date" id="tgl_booking" name="tgl_booking" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="jam_main">Jam Main:</label>
      <input type="text" id="jam_main" name="jam_main" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="durasi">Durasi:</label>
      <input type="number" id="durasi" name="durasi" min="1" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="pembayaran">Pilih Pembayaran:</label>
      <select id="pembayaran" name="pembayaran" class="form-control" required>
        <option value="transfer">Transfer Bank</option>
        <option value="cash">Pembayaran Tunai</option>
      </select>
    </div> 

    <div class="form-group">
      <label for="fileToUpload">Upload Bukti Pembayaran:</label>
      <input type="file" id="fileToUpload" name="fileToUpload" class="form-control-file" accept="image/*">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
