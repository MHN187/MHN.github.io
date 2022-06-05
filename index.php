<!DOCTYPE html>
<html lang="en">
  <head>
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
      
    <!--Halaman Login-->
    <div class="form" id="depan">
      <h2>Pengumuman Kelulusan Siswa</h2>
      <h1>SMK MANGGALA</h1>
      <form action="masuklogin.php" method="post" name="form_input">
        <div class="NISN">
          Masukkan NISN Anda: <input type="text" name="NISN" placeholder="Masukkan NISN" required="">
        </div>
        <div class="NAMA">
         Masukkan NAMA Anda: <input type="text" name="NAMA" placeholder="Masukkan NAMA" required="">
        </div>
        
        <div class="tombol">
          <input type="submit" name="input" value="LOGIN">
          <input type="reset" name="reset" value="RESET">
        </div>
      </form>
    </div>
  </head>

  <script src="script.js"></script>
    </body>
</html>
