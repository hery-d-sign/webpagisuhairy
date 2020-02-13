<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur for</title>
</head>
<body>
    <?php
        for ($i=0; $i<=10;$i++){
            echo "Hallo <br> <br>";
    }
    ?>

    <br>
    <br>

    <!-- contoh perulangan kedua angka genap -->
    <?php
    $i=2;
        for($i;$i<=10;$i+=2){
            echo "$i genap <br> <br>";
        }
    ?>
    <!-- tutup contoh perulangan kedua angka genap -->

    <br>
    <br>

    <!-- buka contoh perulangan angka ganjil -->

    <?php
    $i=1;
        for($i;$i<=10;$i+=2){
            echo "$i ganjil <br> <br>";
        }
    ?>
    <!-- tutup contoh perulangan angka ganjil -->
    <br>
    <br>

    <!-- contoh 1 -->
    <?php
    for($i=1; $i<=10; $i++){
        echo "$i";
    }
    echo "<br> <br>";
    ?>
    <!-- tutup contoh 1 -->

    <!-- contoh 2 -->
    <?php
    for($i=1; ;$i++){
        if($i>10){
        break;
        }
        echo "$i";
    }
    ?>
    <!-- tutup contoh 2 -->

    <!-- contoh 3 -->
    <?php
    $i=1;
    for(; ;){
        if($i>10){
        break;
        }
        echo "$i";
        $i++;
    } echo "<br><br>";
    ?>
    <!-- tutup contoh 3 -->

    <!-- contoh 4 -->
    <?php
    for($i=1; $i<=10; print "$i", $i++);
    ?>
    <!-- tutup contoh 4 -->
    


</body>
</html>