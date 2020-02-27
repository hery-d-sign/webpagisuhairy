<?php
    include '../koneksi/koneksi.php';


    if(isset($_GET['update'])){
    $id=$_GET['id_mahasiswa'];
    $nama_mahasiswa=$_GET['nama'];
    $nim_mahasiswa=$_GET['nim'];
    $mata_kuliah=$_GET['mata_kuliah'];
    $jurusan=$_GET['jurusan'];
    $nilai_harian=$_GET['nilaiharian'];
    $nilai_quiz=$_GET['nilaiquiz'];
    $nilai_uas=$_GET['nilaiuas'];
    $nilai_uts=$_GET['nilaiuts'];
    $nilai_akhir=($nilai_harian*10/100)+($nilai_quiz*15/100)+($nilai_uas*35/100)+($nilai_uts*40/100);

    if($nilai_akhir<=50){
        $grade='E';
    }else if($nilai_akhir<=65){
        $grade='D';
    }else if($nilai_akhir<=75){
        $grade='C';
    }else if($nilai_akhir<=85){
        $grade='B';
    }else if($nilai_akhir<=100 || $nilai_akhir>100){
        $grade='A';
    }

    $update=mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa', nim_mahasiswa='$nim_mahasiswa', mata_kuliah='$mata_kuliah', jurusan='$jurusan', nilai_harian='$nilai_harian', nilai_quiz='$nilai_quiz', nilai_uas='$nilai_uas', nilai_uts='$nilai_uts', nilai_akhir='$nilai_akhir', grade='$grade' WHERE id_mahasiswa='$id'")or die(mysqli_error($update));

    if($update){
        echo'
        <script>alert("data berhasil diupdate"); window.location.href="../mahasiswabootstrap.php"</script>';            
    }else{
        echo'
        <script>alert("data gagal diupdate"); window.location.href="../edit_mahasiswa.php"</script>';
    }
}
?>

