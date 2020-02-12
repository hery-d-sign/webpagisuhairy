<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- switch metode pertama -->
    <?php
    $day="Mon";
    switch ($day){
        case 'Sun' : $hari="Minggu"; break;
        case 'Mon' : $hari="Senin <br> <br>"; break;
        case 'Tue' : $hari="Selasa"; break;
        case 'Wed' : $hari="Rabu"; break;
        case 'Thu' : $hari="Kamis"; break;
        case 'Fri' : $hari="Jumat"; break;
        case 'Sat' : $hari="Sabtu"; break;
        default    : $hari="Kiamat";
    }
    echo "Hari ini hari <b>$hari</b>";
    ?>

    <?php
    
// metode switch pertama
    $hari="Minggu";

    switch($hari){
        case 'Minggu':
            # code...
            echo"hari ini hari $hari";
            break;
        case 'senin':
            # code...
            echo"hari ini hari $hari";
            break;
        case 'selasa':
            # code...
            echo"hari ini hari $hari";
            break;

            default: 
            echo"hari ini hari saya dapat uang banyak";
    }
    ?>

    <br>
    <br>

<!-- program struktur kondisi khusus? untuk memeriksa tahun kabisat -->

<?php

$tahun=date(2020);
$kabisat=($tahun%4==0) ? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <b>$tahun</b> $kabisat";
?>
</body>
</html>