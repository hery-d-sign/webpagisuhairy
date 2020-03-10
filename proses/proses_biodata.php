<?php
include '../koneksi/koneksi.php';
// error_reporting(0);

if (isset($_POST['tambah'])){
    // data diambl dari form
    $nama=$_POST['nama_lengkap'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $hobby1=(!empty($_POST['hobby1'])?$_POST['hobby1']:'');
    $hobby2=(!empty($_POST['hobby2'])?$_POST['hobby2']:'');
    $hobby3=(!empty($_POST['hobby3'])?$_POST['hobby3']:'');
    $hobby4=(!empty($_POST['hobby4'])?$_POST['hobby4']:'');
    $hobby=($hobby1.','.$hobby2.','.$hobby3.','.$hobby4);
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $email=$_POST['email'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $tempat_lahir=$_POST['tempat_lahir'];
    
    // untuk upload file atau foto
    $nama_file=$_FILES['foto']['name'];

    $format=explode(".", $nama_file);
    $fileExtension = end($format); /* file extension sifatnya bebas */
    $name_sementara=$_FILES['foto']['tmp_name'];
    $md5file = md5($nama_file) . "." . $fileExtension;
        
    $lokasi_upload= "../upload/"; /* direktory penyimpanan */

    $fungsi_upload=move_uploaded_file($name_sementara, $lokasi_upload.$md5file);
    
    $biodata=mysqli_query($koneksi, "INSERT INTO biodata VALUES ('', '$nama', '$alamat', '$no_hp', '$hobby', '$tanggal_lahir', '$tempat_lahir', '$jenis_kelamin', '$email', '', '$md5file')")or die(mysqli_error($biodata));


    if($biodata){
        echo'<script>alert("data biodata berhasil dimasukan"); window.location.href="../admin/tabel_biodata.php" </script>';
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
