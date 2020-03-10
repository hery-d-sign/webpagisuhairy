<?php
include'../koneksi/koneksi.php';

        if(isset($_GET['id_biodata'])){
            $id=$_GET['id_biodata'];

            $hapus=mysqli_query($koneksi, "DELETE FROM biodata WHERE id_biodata='$id'")or die(mysqli_error($hapus));

            if($hapus){
                echo '<script>alert("data berhasil dihapus"); window.location.href="../admin/tabel_biodata.php"</script>';
            }else{
                echo '<script>("data gagal dihapus")</script>';
            }
        }


?>

