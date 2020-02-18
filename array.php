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
    <form action="" method="POST">
        <input type="text" name="mangga">
        <input type="submit" name="tambah" value="Tampil">
    </form>

    <?php
        if(isset($_POST['tambah'])){
            $buah=$_POST['mangga'];

            $warna=[
                "merah",
                "ungu",
                "kuning"
            ];
            if($buah=$warna[0]){
                echo"<h1 style='color:red;'>$warna[0]</h1>";
            }else if($buah=$warna[1]){
                echo"<h1 style='color:purple;'>$warna[1]</h1>";
            }
        }
    ?>

    <br>
    <br>

    <!-- contoh array -->
    <?php
        $arrBuah=array ("Mangga", "Apel", "Pisang", "Jeruk");
        echo $arrBuah[0]; //Mangga
        echo $arrBuah[0]; //Jeruk

        $arraWarna=array();
        $arraWarna[]= "Merah";
        $arraWarna[]= "Biru";
        $arraWarna[]= "Hijau";
        $arraWarna[]= "Putih";
        echo $arraWarna[0]; //Merah
        echo $arraWarna[2]; //Hijau

    ?>
    
    <!-- metode pertama -->
    <?php
        $buah= array("mangga", "kelapa", "jambu", "apel");
        echo" <br>$buah[2]";

    // metode kedua
        $buahaja=[
            "mangga",
            "kelapa",
            "jambu",
            "apel",
        ];

        echo"<br>$buahaja[2]";

    // metode ketiga
        $buah3=array();
        $buah3[]="mangga";
        $buah3[]="kelapa";
        $buah3[]="jambu";
        $buah3[]="apel";

        echo"<br>$buah3[0]";

    ?>
    
    <?php
        include 'footer.php'
    ?>
</body>
</html>