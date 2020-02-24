
<?php
session_start();
include 'koneksi.php';

$makanan = $_GET['makanan'];
$minuman = $_GET['minuman'];

$data = mysqli_query($koneksi,"select*from menu where makanan='$makanan' and minuman='$minuman'");
$cek = mysqli_num_rows($data);

if($cek>0){
    $_SESSION['makanan'] = $makanan;
    $_SESSION['status'] = "login";
    header("location:pembeli2.php");
}else{
    echo"maaf pilihan anda tidak ada";
    

}
?>
