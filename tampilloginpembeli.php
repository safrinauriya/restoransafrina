<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
</head>
<body>
<center><h1>Data Pembeli Restoran MAMASUKA</h1></center>
    <center><table border="1" width="80%"></center>
    <tr>
    <th bgcolor="aqua">ID Pembeli</th>
    <th bgcolor="aqua">Nama</th>
    <th bgcolor="aqua">Alamat</th>
    <th bgcolor="aqua">Telp.</th>
    </tr>

    <?php
    include "koneksiloginpembeli.php";
    $query = "SELECT * FROM pembeli";
    $sql = mysqli_query($connect,$query); 
    
    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo"<td>".$data['ID_Pembeli']."</td>";
        echo"<td>".$data['Nama']."</td>";
        echo"<td>".$data['Alamat']."</td>";
        echo"<td>".$data['Telp']."</td>";
        echo "</tr>";
    }
    ?>
    </table>
    <div class="akun">
    <form action="signinpembeli.php">
    <h1 >INGIN LOGIN?</h1><button type="submit" class="ya">YA</button>
    </form>
    </div>
</body>
</html>
