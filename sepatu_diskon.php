<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<form action="" method="POST" name="tambah">
<label>Sepatu</label>
<input type="number" name="barang" placeholder="masukkan harga barang"> <br> <br>
<label>Diskon</label>
<input type="number" name="diskon" placeholder="masukkan jumlah diskon"> <br> <br>
<input type="submit" name="tambah" value="input">
<br> <br>

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

