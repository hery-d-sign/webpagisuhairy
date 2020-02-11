<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 

    <?php
    // // echo "hello world <br>";
    // // print "i'm learning PHP Script Language now";

    $nama="Suhairy";
    $alamat="Punge Blang Cut";
    $nohp="085260118387 <br>";

    $hasil="";
    if($hasil=="Suhairy"){
        echo($nama);
    }else if($hasil=="Punge Blang Cut"){
        echo($alamat);
    }else{
        echo($nohp);
    }

    
    ?>
    <?php
        $a=10;
        $b=20;

        function myTest(){
            global $a;
            global $b;
            echo ($a)+($b);
        }
        myTest();
    ?>


    <?php
        global $a;
        $a="abc"; 

        global $b;
        $b="hery";

        echo $GLOBALS["a"]="abc  <br>";
        echo $GLOBALS["b"]="hery";
    ?>



    <br>
    <!-- persentase diskon -->   
    <?php
        $jual=100000;
        $potongan=0.1;
        $net=$jual-($jual*$potongan);
        echo "Penjualan bersih = Rp $net <br>";
    ?>

    <br>
    <br>

    <!-- contoh penggunaan operator modulus/sisa bagi hasil -->
        <?php
        $halaman=11;
        if($halaman % 2==0){
            echo "Halaman Genap <br>";
        }else if($halaman % 3==2){
            echo "Halaman Utama <br>";
        }else{
            echo "Halaman Ganjil";
        }
    ?>

    <br>
    <br>

    <!-- operator -->
    <?php
        $a=10;
        $b=5;
        $c=7;
        $d=8;

        $kali=($a*$d);
        $tambah=($a+$c);
        $kurang=($b-$d);
        $bagi=($a/$b);
        $hasil=$bagi;

        if($hasil==80){
            echo"Nilai anda adalah $kali";
        }else if($hasil==17){
            echo"Nilai anda adalah $tambah";
        }else if($hasil==-3){
            echo "Nilai anda adalah $kurang";
        }else if($hasil==2){
            echo "Nilai anda adalah $bagi";
        }else{
            echo "Nilai yang anda masukan tidak ada";
        }
    ?>

    <br>
    <br>

    <!-- Program contoh penanganan beberapa tipe data dasar dalam PHP -->

    <?php
    $nim = "0411500400";
    $nama = 'Suhairy';
    $umur = 40;
    $nilai = 90.00;
    $status = TRUE;

    echo "NIM : $nim <br>";
    echo "Nama :$nama<br>";
    print "Umur : ".$umur; print "<br>";
    printf ("Nilai :%.2f<br>", $nilai);
    if ($status)
        echo "status : Mahasiswa Aktif";
    else
        echo "status : Mahasiswa Tidak Aktif";
    ?>

    <br>
    <br>


    <!-- Program penggunaan konstanta dalam PHP (define) -->
    <?php
        define ("NAMA", "Suhairy");
        define ("NILAI", 90);

        echo "Nama : " . NAMA;
        echo "<br>Nilai : " . NILAI;
    ?>

    <br>
    <br>

    <!--Program beberapa OPERATOR  aritmatika dalam PHP -->

    <?php
        $gaji=3000000;
        $pajak=0.025;
        $thp=
        $gaji-($gaji*$pajak);

        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp $thp";
    ?>

    <br>
    <br>

    <!-- Program operator logika dan perbandingan dalam PHP -->

    <?php
        $a=5;
        $b=4;

        echo "$a==$b : ". ($a==$b);
        echo "<br>$a != $b : ". ($a != $b);
        echo "<br>$a>$b : ". ($a>$b);
        echo "<br>$a<$b : ". ($a<$b);
        echo "<br>($a!=$b) && ($a>$b) : ".(($a != $b) && ($a>$b));
        echo "<br>($a!=$b) || ($a>$b) : ".(($a != $b) || ($a>$a));
    ?>

    <br>
    <br>
    
    <!-- Contoh Soal Percabangan -->
    <?php
        $hari="Jumat";

        if($hari=="Senin"){
            echo "Upacara";
        }

        else if($hari=="Selasa"){
            echo "Piket";
        }

        else if($hari=="Rabu"){
            echo "Olahraga";
        }

        else if($hari=="Kamis"){
            echo "Belajar";
        }

        else if($hari=="Jumat"){
            echo "Pengajian";
        }

        else if($hari=="Sabtu"){
            echo "Cepat Pulang";
        }

        else if($hari=="Minggu"){
            echo "Libur";
        }


        else{
            echo "Tidak Ada Acara";
        }
    ?>

    <br>
    <br>


    <!--  -->
    <?php
        $Nim="1020125212";
        $Nama="Ararar";
        $Jurusan="Manajemen";
        $nilai="100";

        if($nilai<=50){
            echo "Grade yang diperoleh oleh Nama $Nama dengan Nim $Nim dan Jurusan $Jurusan adalah : E";
        }

        else if($nilai <=65){
            echo "Grade yang diperoleh oleh Nama $Nama dengan Nim $Nim dan Jurusan $Jurusan adalah : D";
        }

        else if($nilai <=72){
            echo "Grade yang diperoleh oleh Nama $Nama dengan Nim $Nim dan Jurusan $Jurusan adalah : C";
        }

        else if($nilai <=83){
            echo "Grade yang diperoleh oleh Nama $Nama dengan Nim $Nim dan Jurusan $Jurusan adalah : B";
        }

        else if($nilai <=100){
            echo "Grade yang diperoleh oleh Nama $Nama dengan Nim $Nim dan Jurusan $Jurusan adalah : A";
        }

        else{
            echo "$Nama dengan $Nim dan $Jurusan dinyatakan tidak lulus";
        }

    ?>

</body>
</html>

