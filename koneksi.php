<?php
$koneksi=mysqli_connect("localhost","root","","logindbgusti");
//Cek koneksi
if (mysqli_connect_error()){
}else{
    echo "BERHASIL";
}
?>