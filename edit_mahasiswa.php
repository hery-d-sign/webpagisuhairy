<?php
    include 'header.php';
?>

<?php
    include 'koneksi/koneksi.php';


$id=$_GET['id_mahasiswa'];

$show=mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'") or die (mysqli_error($show));

if(mysqli_num_rows($show)==0){
    echo '
        <script>window.history.back</script>
    ';
}else{
    $data=mysqli_fetch_array($show);
}

?>


    <div class="container">
        <form action="proses/proses_edit_mahasiswa.php" method="GET">
        <input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control col-sm-2"  name="nama" value="<?php echo $data['nama_mahasiswa']?>">
            </div>

            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="number" class="form-control col-sm-2" name="nim" value="<?php echo $data['nim_mahasiswa']?>">
            </div>

            <div class="form-group">
                <label for="mata kuliah">Mata Kuliah</label>
                <input type="text" class="form-control col-sm-2" name="mata_kuliah" value="<?php echo $data['mata_kuliah']?>">
            </div>
        
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control col-sm-2" name="jurusan" value="<?php echo $data['jurusan']?>">
            </div>
        
            <div class="form-group">
                <label for="nilai harian">Nilai Harian</label>
                <input type="number" class="form-control col-sm-2" name="nilaiharian" value="<?php echo $data['nilai_harian']?>">
            </div>

            <div class="form-group">
                <label for="nilai quiz">Nilai Quiz</label>
                <input type="number" class="form-control col-sm-2" name="nilaiquiz" value="<?php echo $data['nilai_quiz']?>">
            </div>

            <div class="form-group">
                <label for="nilai uas">Nilai UAS</label>
                <input type="number" class="form-control col-sm-2" name="nilaiuas" value="<?php echo $data['nilai_uas']?>">
            </div>

            <div class="form-group">
                <label for="nilai uts">Nilai UTS</label>
                <input type="number" class="form-control col-sm-2" name="nilaiuts" value="<?php echo $data['nilai_uts']?>">
            </div>

        <input type="submit" name="update" class="btn btn-success" value="update">
        </form>
    </div>