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
    <h1>LOGIN ADMIN</h1>
     <?php
     if(isset($_GET['pesan'])){
         if($_GET['pesan']=="gagal"){
             echo "LOGIN GAGAL";
         }else if ($_GET['pesan']=="logout"){
             echo "anda berhasil log out";
         }
         }
     ?>
     <h2 class="login-header">LOGIN SEBAGAI ADMIN</h2>
      <form method="post" action="cek_login.php" class="login-container">
         <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
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
