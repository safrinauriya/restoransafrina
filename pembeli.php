<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMBELI</title>
    <link rel="stylesheet" href="pembeli.css" type="text/css">

</head>
<body>
<div class="hiya"><center><h1>SELAMAT DATANG DI RESTORAN MAMASUKA</h1></center></div>
<div class="oke"><center><h1>PILIH MAKANAN DI BAWAH INI</h1></center> </div>   
   
    <div class="box">
    <img src="ayambetutu.jpg" alt="ayambetutu">
    <div class="deskripsi">Ayam Betutu</div>
    </div>
    <div class="box">
    <img src="nasigoreng.jpg" alt="nasigoreng">
    <div class="deskripsi">Nasi Goreng</div>
    </div>
    <div class="box">
    <img src="gurami.jpg" alt="gurami">
    <div class="deskripsi">Gurami Bakar</div>
    </div>
    <div class="box">
    <img src="bakso.jpg" alt="bakso">
    <div class="deskripsi">Bakso</div>
    </div>
    <div class="box">
    <img src="kangkung.jpg" alt="kangkung">
    <div class="deskripsi">Cah Kangkung</div>
    </div>
    <div class="box">
    <img src="soto.jpg" alt="soto">
    <div class="deskripsi">Soto</div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="login">
        <h2 class="login-header">PEMESANAN MAKANAN</h2>
    <form class="login-container"action="" method="GET">
        <input type="text" name="nama_pembeli" placeholder="NAMA PEMBELI">
        <input type="text" name="jumlah_porsi" placeholder="PORSI">
        <input type="text" name="makanan" placeholder="NAMA MAKANAN">
        <br>
        <input type="submit" value="SUBMIT">
    </form>

    <div class="hm">
    <table>
        <tr>
            <td>NAMA</td> <td>:<?php echo $_GET['nama_pembeli']?? ''?></td>
        </tr>
        <tr>
            <td>PORSI</td> <td>:<?php echo $_GET['jumlah_porsi']?? ''?></td>
        </tr>
        <tr>
            <td>MAKANAN</td> <td>:<?php echo $_GET['makanan']?? ''?></td>
        </tr>
    </table>
    </div>
    </div>
    
</body>
</html>