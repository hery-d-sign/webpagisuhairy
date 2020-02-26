<?php
    include 'header.php';
?>

<?php
    include 'koneksi/koneksi.php';


$id= $_GET['id_mahasiswa'];

$show=mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'") or die (mysqli_error($show));

if(mysqli_num_rows($show)==0){
    echo '
        <script>window.history.back(</script>
    ';
}else{
    $data=mysqli_fetch_array($show);
}

?>

<form action="proses/proses_mahasiswa.php" method="GET">
    <div class="container">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control col-sm-2"  name="nama" aria-describedby="nama" value="<?php echo $data['nama']?>">
        <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
        </div>

        <div class="form-group">
            <label for="nim">Nim</label>
            <input type="number" class="form-control col-sm-2" name="nim" value="<?php echo $data['nim']?>">
        </div>
    
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control col-sm-2" name="jurusan" value="<?php echo $data['jurusan']?>">
        </div>
    
        <div class="form-group">
            <label for="nilai harian">Nilai Harian</label>
            <input type="number" class="form-control col-sm-2" name="nilaiharian" value="<?php echo $data['nilaiharian']?>">
        </div>

        <div class="form-group">
            <label for="nilai quiz">Nilai Quiz</label>
            <input type="number" class="form-control col-sm-2" name="nilaiquiz" value="<?php echo $data['nilaiquiz']?>">
        </div>

        <div class="form-group">
            <label for="nilai uas">Nilai UAS</label>
            <input type="number" class="form-control col-sm-2" name="nilaiuas" value="<?php echo $data['nilaiuas']?>">
        </div>

        <div class="form-group">
            <label for="nilai uts">Nilai UTS</label>
            <input type="number" class="form-control col-sm-2" name="nilaiuts" value="<?php echo $data['nilaiuts']?>">
        </div>

    <input type="submit" name="update" class="btn btn-danger" value="update">
</form>
    </div>