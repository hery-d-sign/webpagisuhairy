<?php
error_reporting(0);
if (isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $Jeniskelamin=$_POST['JK'];
    $Alamat=$_POST['alamat'];
    $Tanggallahir=$_POST['lahir'];
    $Tempatlahir=$_POST['tempat'];
    $Nohp=$_POST['1234567891012'];
    $Hobby1=$_POST['Hobby1'];
    $Hobby2=$_POST['Hobby2'];
    $Hobby3=$_POST['Hobby3'];
    $Hobby4=$_POST['Hobby4'];
    echo "nama saya adalah : $nama <br>"; 
    echo "email saya adalah : $email <br>";
    echo "saya seorang : $Jeniskelamin <br>";
    echo "alamat saya : $Alamat <br>";
    echo "tanggal lahir saya : $Tanggallahir <br>";
    echo "tempat lahir : $Tempatlahir <br>";
    echo "no hp saya : $Nohp <br>" ;
    echo "Hobby : $Hobby1 $Hobby2 $Hobby3 $Hobby4";
}
?>
