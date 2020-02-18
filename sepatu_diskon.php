<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css for bootstrap grid -->
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css.map">

    <!-- css for bootstrap reboot -->
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css.map">

    <!-- css for bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css"> 
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
</head>
<body>

<form action="" method="POST" name="tambah">
<label>Sepatu</label>
<input type="number" name="barang" placeholder="masukkan harga barang"> <br> <br>
<label>Diskon</label>
<input type="number" name="diskon" placeholder="masukkan jumlah diskon"> <br> <br>
<input type="submit" name="tambah" value="Input">

<br> <br>


<!-- JS for bundle -->
<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.js.map"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js.map"></script>

    <!-- JS for Boostrap -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.js.map"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.min.js.map"></script>

</body>
</html>

<?php
if (isset($_POST['tambah'])){
    $sepatu=$_POST['barang'];
    $diskon=$_POST['diskon'];
    $syarat=400000;
    $hargabeli=$sepatu-$sepatu*$diskon/100;

if($sepatu>=$syarat){
    echo "$hargabeli";
}
    else{
    echo "tidak mendapat diskon";
}
}
?>

