<!DOCTYPE html>
<html lang="en">
  <head>
      <style>
        .kotak {
            width: 550px;
            height: 130px;
            background-color: rgb(60, 231, 253);
            margin-left: 400px;
            margin-top: 190px;
            font-size: 30px;
            border-radius: 20px;
            transition: 2s ease all;
        }

        .kotak:hover {
            width: 900px;
        }
        

        .kotak h3 {
            padding-left: 45px;
            padding-top: 11px;
        }

        .kotak h1 {
            padding-left: 50px;
        }
      </style>
    
    <link href="assets/favicon/logo.ico" rel="icon"/>
      <body>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Pacifico&display=swap" rel="stylesheet">   
    <title>SMK MANGGALA</title>

    <nav>
        <div class="logo">
            <h4>SMK MANGGALA</h4>
        </div>

        <div class="manggala">
          <img src="assets/300x289.png" alt="MANGGALA" width="40px" height="37">
        </div>

        <ul>
            <li><a href="https://manggala.sch.id/ppdb/" target="_blank">PPDB</a></li>
            <li><a href="https://manggala.sch.id/" target="_blank">Home</a></li>
            <li><a href="#">Kontak</a></li>
            <li><a href="#">Alamat</a></li>
            <li><a href="#">Bantuan</a></li>
        </ul>

        <div class="menu-toggle">
          <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            </div>
        </nav>
        
        <div class="kotak">
            <h3>SELAMAT, Anda Dinyatakan</h3>
            <h1>LULUS</h1>
        </div>    
    </body>
</html>

<?php
    //untuk menghubungkan ke halaman koneksi
    include 'koneksi.php';

    //untuk menangkap data yang dikirim dari form
    if(isset($_POST['input'])){
        $NISN = $_POST['NISN'];
        $NAMA = $_POST['NAMA'];

        //ambil data dari database
        $data = mysqli_query($koneksi,"SELECT * FROM skllogin WHERE NISN='$NISN' AND NAMA='$NAMA'");
        if(mysqli_num_rows($data)){
            echo "Anda Lulus";
        }
    }

?>