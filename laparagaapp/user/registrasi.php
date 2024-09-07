<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laparaga Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Resetting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
   
    background: url('https://cdn1-production-images-kly.akamaized.net/wjdI51RncEBHI1dwjj52h3ZNyg8=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1659245/original/020350300_1501042120-headline-2.jpg') top left, url('https://cdn1-production-images-kly.akamaized.net/wjdI51RncEBHI1dwjj52h3ZNyg8=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1659245/original/020350300_1501042120-headline-2.jpg') bottom right;
    background-size: cover;
    background-repeat: no-repeat;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    border-radius: 15px;
    
}


        .wrapper {
            max-width: 350px;
            min-height: 500px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            
        }

        .logo {
            width: 80px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f,
                0px 0px 0px 5px #ecf0f3,
                8px 8px 15px #a7aaa7,
                -8px -8px 15px #fff;
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 1.4rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            color: #555;
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            color: #666;
            padding: 10px 15px 10px 10px;
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
        }

        .wrapper .form-field .fas {
            color: #555;
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: #03A9F4;
            color: #fff;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1,
                -3px -3px 3px #fff;
            letter-spacing: 1.3px;
        }

        .wrapper .btn:hover {
            background-color: #039BE5;
        }

        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4;
        }

        .wrapper a:hover {
            color: #039BE5;
        }

        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px;
            }
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="logo">
        <img src="https://i.pinimg.com/736x/b4/42/d1/b442d1c467c31624011077ffd6a6bf05.jpg" alt="">
    </div>
    <div class="text-center mt-4 name">
       <br>
    </div>
    <form action="action/prosesregistrasi.php" method="post" id="registrasiForm">
        <div class="form-field d-flex align-items-center">
         <span class="far fa-user"></span>
            <input type="text" name="nama_pembooking" id="nama_pembooking" placeholder="nama">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div class="form-field d-flex align-items-center">
            <input type="text" name="no_hp" id="no_hp" placeholder="no_hp">
        </div>
        <div class="form-field d-flex align-items-center">
            
            <input type="text" name="email" id="email" placeholder="email">
        </div>
             
        <label>
        <input type="checkbox" id="persetujuan" name="persetujuan" required>
         dengan melakukan pendaftaran ini, Saya setuju dengan kebijakan privasi, dan syarat & Ketentuan Planet Futsal
        </label>
        <br>
        <button class="btn mt-3" type="submit" name="submit" id="submit">daftar</button>
        <br>
    </form>

    <div class="text-center fs-6">
    </div>
</div>




</body>
</html>
