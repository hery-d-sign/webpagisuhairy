<?php
    include '../koneksi/koneksi.php';

    if(isset($_GET['id_mahasiswa'])){

        $id=$_GET['id_mahasiswa'];
        $hapus=mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa='$id'")or die(mysqli_error($hapus));

        if($hapus){ ?>
        <script>
        alert('data berhasil dihapus'); window.location.href="../mahasiswabootstrap.php"</script>';

    <?php }else{?>
        <script>alert('data gagal dihapus')</script>
    
<?php   }
?>