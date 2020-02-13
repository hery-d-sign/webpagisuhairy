<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur while</title>
</head>
<body>
    <!-- buka contoh struktur while -->
    <?php
    $i=1;
    while($i<=5){
        echo "Hallo <br> <br>";
        $i++;
    }
    ?>
    <!-- tutup contoh struktur while -->

    <br>
    <br>
    

    <!-- buka contoh struktur do..while -->
    <?php
    $gambar=1;
    do{
        echo "<img src='html/img/foto.jpg'> <br> <br>";
        $gambar++;
    } while($gambar<=5);
    ?>
    <!-- tutup contoh struktur do..while -->
</body>
</html>