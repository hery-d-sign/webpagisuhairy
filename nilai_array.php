<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include 'header.php'
    ?>

</head>
<body>


<?php
$arrNilai=array("Ani"=>80, "Otim"=>90, "Ana"=>75, "Budi"=>85);

echo"Menampilkan isi array dengan foreach: <br>";
foreach ($arrNilai as $nama=> $nilai){
    echo "Nilai $nama = $nilai <br>";
}
reset ($arrNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
while (list ($nama, $nilai)=each($arrNilai)){
    echo "Nilai $nama = $nilai<br>";
}
?>
<br>
<br>

<?php
$arrWarna=array ("Blue", "Black", "Red", "Yellow", "Green");
$arrNilai=array ("Ani"=>80, "Otim"=>90, "Ana"=>75, "Budi"=>85);
echo "<pre>";
print_r ($arrWarna);
echo "<br>";
print_r ($arrNilai);
echo"</pre>"
?>

<?php
    include 'footer.php'
?>
    