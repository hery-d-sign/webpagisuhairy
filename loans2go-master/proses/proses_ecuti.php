<?php
    include '../koneksi/koneksi.php';

    if(isset($_POST['submit'])){
        $id=uniqid();
        $nama_pegawai=$_POST['nama_pegawai'];
        $jabatan=$_POST['jabatan'];
        $unit_kerja=$_POST['unit_kerja'];
        $tanggal_mulai_cuti=$_POST['tanggal_mulai_cuti'];
        $tanggal_akhir_cuti=$_POST['tanggal_akhir_cuti'];
        // $jenis_cuti=($cuti1.','.$cuti2.','.$cuti3.','.$cuti4.','.$cuti5);
        $cuti1 = $_POST['cuti_tahunan'];
        $cuti2 = $_POST['cuti_besar'];
        $cuti3 = $_POST['cuti_sakit'];
        $cuti4 = $_POST['cuti_bersalin'];
        $cuti5 = $_POST['cuti_dengan_alasan'];
        if($cuti1){
            $jenis_cuti = $_POST['cuti_tahunan'];
        } else if($cuti2) {
            $jenis_cuti = $_POST['cuti_besar'];
        } else if($cuti3) {
            $jenis_cuti = $_POST['cuti_sakit'];
        } else if($cuti4) {
            $jenis_cuti = $_POST['cuti_bersalin'];
        } else if($cuti5) {
            $jenis_cuti = $_POST['cuti_dengan_alasan'];
        } else {
            $jenis_cuti = "error";
        }
        $alasan=$_POST['alasan_mengajukan_cuti'];

        $cuti=mysqli_query($koneksi, "INSERT INTO cuti VALUES('$id', '$nama_pegawai', '$jabatan', '$unit_kerja', '$tanggal_mulai_cuti', '$tanggal_akhir_cuti', '$jenis_cuti','$alasan')")or die(mysqli_error($cuti));

        if($cuti){
            echo 'cuti berhasil diinput';
        }else{
            echo 'cuti gagal diinput';
        }
    }
?>