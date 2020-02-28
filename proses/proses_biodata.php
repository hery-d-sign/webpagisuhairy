<?php
include '../koneksi/koneksi.php';
error_reporting(0);

if (isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $hobby=$_POST['hobby'];
    $jenis_kelamin=$_POST['JK'];
    $email=$_POST['email'];
    $tanggal_lahir=$_POST['lahir'];
    
    $biodata=mysqli_query($koneksi, "insert into biodata values ('', '$nama', '$alamat', '$no_hp', '$hobby', '$tanggal_lahir', '$jenis_kelamin', '$email', '' )")or die(mysqli_query($biodata));

    if($biodata){
        echo "<script>alert('Biodata Berhasil di input'); 
        window.location.href='../latihanbiodata.php';
        </script>";
    }

    
    // echo "nama saya adalah : $nama <br>"; 
    // echo "email saya adalah : $email <br>";
    // echo "saya seorang : $Jeniskelamin <br>";
    // echo "alamat saya : $Alamat <br>";
    // echo "tanggal lahir saya : $Tanggallahir <br>";
    // echo "tempat lahir : $Tempatlahir <br>";
    // echo "no hp saya : $Nohp <br>" ;
    // echo "Hobby : $Hobby1 $Hobby2 $Hobby3 $Hobby4";
}
?>
