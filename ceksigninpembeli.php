<?php
session_start();
include 'koneksi.php';

$id = $_POST['ID_Pembeli'];
$nama = $_POST['Nama'];

$data = mysqli_query($koneksi,"select*from pembeli where ID_Pembeli='$id' and Nama='$nama'");
$cek = mysqli_num_rows($data);

if($cek>0){
    $_SESSION['ID_Pembeli'] = $id;
    $_SESSION['status'] = "login";
    header("location:pembeli.php");
}else{
    header("location:index.php?pesan=gagal");

}
?>
