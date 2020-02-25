<?php
include '../koneksi/koneksi.php';

if(isset($_POST['input'])){
    $id=uniqid();
    $nama_barang=$_POST['nama_barang'];
    $harga_barang=$_POST['harga_barang'];
    $stok_barang=$_POST['stok_barang'];
    $kategori=$_POST['kategori'];

    $diskon=mysqli_query($koneksi, "insert into stok values('$id', '$nama_barang', '$harga_barang', '$stok_barang', '$kategori')") or die (mysqli_error($diskon));

    if($diskon){
        echo "<script>alert('Data Berhasil di input'); window.location.href='../diskonbootstrap.php';
        </script>";
    }else{
        echo 'Data Gagal di Input';
    }
}

?>