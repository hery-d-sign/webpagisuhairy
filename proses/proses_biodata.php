<?php
include '../koneksi/koneksi.php';
// error_reporting(0);

if (isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $hobby1=$_POST['hobby1'];
    $hobby2=$_POST['hobby2'];
    $hobby3=$_POST['hobby3'];
    $hobby4=$_POST['hobby4'];
    $hobby=($hobby1.','.$hobby2.','.$hobby3.','.$hobby4);
    $jenis_kelamin=$_POST['JK'];
    $email=$_POST['email'];
    $tanggal_lahir=$_POST['lahir'];
    
    
    $nama_file=$_FILES['foto']['name'];

    $format=explode(".", $nama_file);
    $fileExtension = end($format);
    $name_sementara=$_FILES['foto']['tmp_name'];
    $md5file = md5($nama_file) . "." . $fileExtension;
        
    $lokasi_upload= "../upload/";

    $fungsi_upload=move_uploaded_file($name_sementara, $lokasi_upload.$md5file);
    
    $biodata=mysqli_query($koneksi, "insert into biodata values ('', '$nama', '$alamat', '$no_hp', '$hobby', '$tanggal_lahir', '$jenis_kelamin', '$email', '', '$md5file')")or die(mysqli_query($biodata));


    if($biodata){
        echo'data biodata berhasil dimasukan';
    }else{
        echo'data gagal dimasukkan';
    }
    
    // if($biodata){
    //     echo "<script>alert('Biodata Berhasil di input'); 
    //     window.location.href='../latihanbiodata.php';
    //     </script>";
    // }

    
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
