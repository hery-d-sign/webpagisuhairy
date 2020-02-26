<?php
    include'../koneksi/koneksi.php';


    if(isset($_GET['update'])){
    $id=$_GET['id_mahasiswa'];
    $nama_mahasiswa=$_GET['nama'];
    $nim_mahasiswa=$_GET['nim'];
    $jurusan=$_GET['jur'];
    $nilai_harian=$_GET['harian'];
    $nilai_quiz=$_GET['quiz'];
    $nilai_uts=$_GET['uts'];
    $nilai_uas=$_GET['uas'];
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

    $update=mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama_mahasiswa', nim='$nim_mahasiswa', jurusan='$jurusan', nilai_harian='$nilai_harian', nilai_quiz='$nilai_quiz', nilai_uts='$nilai_uts', nilai_uas='$nilai_uas', hasil_akhir='$hasil_akhir', grade='$grade' WHERE id_mahasiswa='$id'")or die(mysqli_error($update));
    if($update){
        echo'
            <script>alert("data berhasil diupdate"</script>
        '
    }

    }
?>

