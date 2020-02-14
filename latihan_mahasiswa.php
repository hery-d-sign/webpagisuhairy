<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $Nim="1020125212";
        $Nama="Ararar";
        $Jurusan="Manajemen";
        $harian=70;
        $quis=65;
        $uas=100;
        $uts=85;
        $nilai=($harian*10/100)+($quis*15/100)+($uts*40/100)+($uas*35/100);


        if($nilai<=50){
            $contoh = "Grade yang diperoleh oleh Nama $Nama dengan Nim $Nim dan Jurusan $Jurusan nilai diperoleh $nilai adalah : E";
        }

        else if($nilai <=65){
            $contoh = "Grade yang diperoleh oleh Nama $Nama dengan Nim $Nim dan Jurusan $Jurusan nilai diperoleh $nilai adalah : D";
        }

        else if($nilai <=72){
            $contoh = "Grade yang diperoleh oleh Nama $Nama dengan Nim $Nim dan Jurusan $Jurusan nilai diperoleh $nilai adalah : C";
        }

        else if($nilai <=83){
            $contoh = "Grade yang diperoleh oleh Nama $Nama dengan Nim $Nim dan Jurusan $Jurusan nilai diperoleh $nilai adalah : B";
        }

        else if($nilai <=100){
            $contoh = "Grade yang diperoleh oleh Nama $Nama dengan Nim $Nim dan Jurusan $Jurusan nilai diperoleh $nilai adalah : A";
        }

        else{
            $contoh = "$Nama dengan $Nim dan $Jurusan dinyatakan tidak lulus";
        }

    ?>
    <!-- tutup metode pertama -->

    <form action="" method="POST" name="tambah">
    <label>Nim</label>
    <input type="number" name="nim" placeholder="masukkan nim" value="123456"> <br> <br>
    <label>Nama</label>
    <input type="text" name="nama" placeholder="masukkan nama" value="gagalero"> <br> <br>
    <label>Jurusan</label>
    <input type="text" name="jurusan" placeholder="masukan jurusan" value="fkip"> <br> <br>
    <label>Nilai Harian</label>
    <input type="number" name="nilai harian" placeholder="masukkan nilai" value="80"> <br> <br>
    <label>Nilai Quiz</label>
    <input type="number" name="nilai quiz" placeholder="masukkan nilai" value="60"> <br> <br>
    <label>Nilai UTS</label>
    <input type="number" name="nilai uts" placeholder="masukkan nilai" value="70"> <br> <br>
    <label>Nilai UAS</label>
    <input type="number" name="nilai uas" placeholder="masukkan nilai" value="70"> <br> <br>
    <input type="submit" name="tambah">

</body>
</html>


<?php
if (isset($_POST['tambah'])){
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $nilai=($harian*10/100)+($quis*15/100)+($uts*40/100)+($uas*35/100);

    echo "nilai anda $nilai";
    // echo $contoh;
}
?>