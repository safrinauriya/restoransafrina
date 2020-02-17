<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:lightslategray;
        }
    </style>
</head>
<body>
<center><h1>Data Penjualan Restoran Mamasuka</h1></center>
    <center><table border="1" width="80%"></center>
    <tr>
    <th bgcolor="aqua">ID MAKANAN</th>
    <th bgcolor="aqua">NAMA MAKANAN</th>
    <th bgcolor="aqua">JUMLAH</th>
    <th bgcolor="aqua">HARGA</th>
    <th bgcolor="aqua">TOTAL</th>
    </tr>

    <?php
    include "koneksi2.php";
    $query = "SELECT*FROM datapenjualan";
    $sql = mysqli_query($connect,$query);
    
    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo"<td>".$data['id_makanan']."</td>";
        echo"<td>".$data['nama_makanan']."</td>";
        echo"<td>".$data['jumlah']."</td>";
        echo"<td>".$data['harga']."</td>";
        echo"<td>".$data['total']."</td>";
        echo "</tr>";
    }
    ?>
    </table>


</body>
</html>