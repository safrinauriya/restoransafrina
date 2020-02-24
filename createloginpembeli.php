<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembeli</title>
</head>
<body>
<?php
    include "koneksiloginpembeli.php";

    $nama = $_POST ['Nama'];
    $alamat = $_POST ['Alamat'];
    $telp = $_POST['Telp'];

    $query = "INSERT INTO pembeli (Nama,Alamat,Telp) 
    VALUES ('$nama','$alamat','$telp')";

    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        header("location:berhasil.php");
    }else{
        header("location:indexloginpembeli.php?pesan=gagal");
    }
    
?>
</body>
</html>
