<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUAT AKUN</title>
</head>
<style>
body{
    background-color: khaki;
}
.judul{
    background-color: lavenderblush;
    font-family: fantasy;
    color: lightcoral;
    font-size: 30px;
    float: center;
    text-align: center;
    height: 70px;
    font-weight: 700;
    margin-bottom:50px;
    margin-left:150px;
    margin-right:150px;
    border-radius: 15px;
}
.isi{
    background-color:lightpink;
    text-align: center;
    float: center;
    color:lightslategray;
    align:center;
    padding: 15px;
    height: 300px;
    width: 50%;
    border-radius: 15px;
    box-shadow: black;
    font-size: 25px;
    font-weight: 300;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

}
input{
    width: 500px;
    background-color: lightyellow;
    font-family: fantasy;
    color: midnightblue;
    font-size: 25px;
    padding:10px;
    margin:10px;
}
button{
    color: navajowhite;
    background-color: palevioletred;
    height: 50px;
    width: 200px;
}
.akun{
    color:lightslategray;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 10px;
    margin-left:50px;
}
.ya{
    color: navajowhite;
    background-color: palevioletred;
    height: 50px;
    width: 80px;
    margin-left: 80px;
    background-color: cornflowerblue;
}


</style>
<body>
<?php
     if(isset($_GET['pesan'])){
         if($_GET['pesan']=="gagal"){
             echo "REGISTRASI GAGAL, HARAP COBA LAGI";
         }else if ($_GET['pesan']=="logout"){
             echo "anda berhasil log out";
         }
         }
     ?>
<form method="POST" action="createloginpembeli.php">
        <div class="judul"><center><h1>PENGISIAN DATA PEMBELI</h1></center></div>
        <center><div class="isi">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td>:</td>
                <td><input type="text" name="Telp"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit">SIMPAN</button></td>
            </tr>
        </table>  
        </div></center>          
    </form>
    <div class="akun">
    <form action="signinpembeli.php">
    <h1 >SUDAH PUNYA AKUN?</h1><button type="submit" class="ya">YA</button>
    </form>
    </div>
    
</body>
</html>
