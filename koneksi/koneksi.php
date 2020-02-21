<?php
$server="localhost";
$username="root";
$password="";
$db="barang";
$koneksi=mysqli_connect($server, $username, $password, $db)or die(mysqli_error($koneksi));

if($koneksi){
    echo"database berhasil terkoneksi";
}else if(!$koneksi){
    die('koneksi gagal' .mysqli_connect_error());
}
?>