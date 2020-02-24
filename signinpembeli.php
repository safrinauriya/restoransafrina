<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
    <div class="login">
    <h1>LOGIN PEMBELI</h1>
     <?php
     if(isset($_GET['pesan'])){
         if($_GET['pesan']=="gagal"){
             echo "LOGIN GAGAL";
         }else if ($_GET['pesan']=="logout"){
             echo "anda berhasil log out";
         }
         }
     ?>
     <h2 class="login-header">LOGIN SEBAGAI PEMBELI</h2>
      <form method="post" action="ceksigninpembeli.php" class="login-container">
         <table>
            <tr>
                <td>ID_Pembeli</td>
                <td>:</td>
                <td><input type="text" name="ID_Pembeli"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <br>
                <td><input type="submit" value="LOGIN"><br></td>
            </tr>
         </table>
      </form>
      </div>
</body>
</html>
