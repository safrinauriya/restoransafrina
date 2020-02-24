<?php 
$connect = mysqli_connect("localhost","root","","login");

// Check connection
if (!$connect){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
