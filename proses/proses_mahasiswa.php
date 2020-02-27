<?php
include '../koneksi/koneksi.php';

if(isset($_POST['tambah'])){
    $id=uniqid();
    $nama_mahasiswa=$_POST['nama'];
    $nim_mahasiswa=$_POST['nim'];
    $mata_kuliah=$_POST['mata_kuliah'];
    $jurusan=$_POST['jurusan'];
    $nilai_harian=$_POST['nilaiharian'];
    $nilai_quiz=$_POST['nilaiquiz'];
    $nilai_uas=$_POST['nilaiuas'];
    $nilai_uts=$_POST['nilaiuts'];
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

    $mahasiswa=mysqli_query($koneksi, "insert into mahasiswa values('$id', '$nama_mahasiswa', '$nim_mahasiswa', '$mata_kuliah', '$jurusan', '$nilai_harian', '$nilai_quiz', '$nilai_uas', '$nilai_uts', '$nilai_akhir', '$grade')") or die (mysqli_error($mahasiswa));

    if($mahasiswa){
        echo "<script>alert('Nilai Berhasil di input'); 
        window.location.href='../mahasiswabootstrap.php';
        </script>";
    }else{
        echo 'Nilai Gagal di Input';
    }
}
?>