<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- persentase diskon -->
    <?php
        $jual=100000;
        $potongan=0.1;
        $net=$jual-($jual*$potongan);
        echo "Penjualan bersih = Rp $net <br>";
    ?>

    <!-- contoh penggunaan operator modulus/sisa bagi hasil -->
        <?php
        $halaman=11;
        if($halaman % 2==0){
            echo "Halaman Genap <br>";
        }else if($halaman % 3==2){
            echo "Halaman Utama";
        }else{
            echo "Halaman Ganjil";
        }
    ?>

    <!-- operator -->
    <?php
        $a=10;
        $b=5;
        $c=7;
        $d=8;

        $kali=($a*$d);
        $tambah=($a=$c);
        $kurang=($b-$d);
        $bagi=($a/$b);
        $hasil=$kali;

        if($hasil==80){
            echo"Nilai anda adalah $kali";
        }else if($hasil==17){
            echo"Nilai anda adalah $tambah";
        }
    ?>

</body>
</html>