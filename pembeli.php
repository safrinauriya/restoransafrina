<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMBELI</title>
    <link rel="stylesheet" href="pembeli.css" type="text/css">
<style>
#no{
    background-color: lightcoral;
    width: 90%;
    margin: auto;
    text-align: left;
    padding: 50px;
}
#card{
    background-color: lightgrey;
    border-radius: 8px;
    height: 500px;
    margin-left: 350px;
    width: 500px;
}

#cardd-content{
    padding: 12px 20px;
}
#cardd-title{
    font-family: cursive;
    letter-spacing: 4px;
    padding-bottom: 23px;
    padding-top: 13px;
    text-align: center;
}
.login1{
    padding: 20px;
    margin: 1px 80px;
}
.login2{
    padding: 20px;
    margin: 0px 80px;
}
.login3{
    padding: 20px;
    margin: 0px 80px;
}
#abl{
    margin: 0px 150px;
}
button{
    height: 50px;
    width: 300px;
    background-color: rosybrown;
    margin:auto;
    color:white;
}

</style>
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
    <div class="box">
    <img src="teh.jpg" alt="teh">
    <div class="deskripsi">Es Teh</div>
    </div>
    <div class="box">
    <img src="jeruk.jpg" alt="esjeruk">
    <div class="deskripsi">Es Jeruk</div>
    </div>
    <div class="box">
    <img src="campur.jpg" alt="es campur">
    <div class="deskripsi">Es Campur</div>
    </div>
    <div class="box">
    <img src="esteler.jpg" alt="es teler">
    <div class="deskripsi">Es Teler</div>
    </div>
    <div class="box">
    <img src="jus.jpg" alt="jus">
    <div class="deskripsi">Jus Buah</div>
    </div>
    <div class="box">
    <img src="air.jpg" alt="air">
    <div class="deskripsi">Air Mineral</div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <div class="login">
        <h2 class="login-header">PEMESANAN MAKANAN</h2>
        <form class="login-container"action="pembeli2.php" method="GET">
        <input type="text" name="no_meja" placeholder="NO MEJA">
        <input type="text" name="nama_pembeli" placeholder="NAMA PEMBELI">
        <input type="text" name="jumlah_porsi" placeholder="PORSI">
        <input type="text" name="makanan" placeholder="NAMA MAKANAN">
        <br>
        <button type="submit">SUBMIT</button>
    </form>
    </div>

</body>
</html>