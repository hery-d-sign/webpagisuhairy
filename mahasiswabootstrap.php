<?php
    include 'header.php'
?>
    <form method="POST">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control col-sm-2"  name="nama" aria-describedby="nama">
    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
    </div>

    <div class="form-group">
        <label for="nim">Nim</label>
        <input type="number" class="form-control col-sm-2" name="nim">
    </div>
    
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control col-sm-2" name="jurusan">
    </div>
    
    <div class="form-group">
        <label for="nilai harian">Nilai Harian</label>
        <input type="number" class="form-control col-sm-2" name="nilaiharian">
    </div>

    <div class="form-group">
        <label for="nilai quiz">Nilai Quiz</label>
        <input type="number" class="form-control col-sm-2" name="nilaiquiz">
    </div>

    <div class="form-group">
        <label for="nilai uas">Nilai UAS</label>
        <input type="number" class="form-control col-sm-2" name="nilaiuas">
    </div>

    <div class="form-group">
        <label for="nilai uts">Nilai UTS</label>
        <input type="number" class="form-control col-sm-2" name="nilaiuts">
    </div>
    
    <button type="submit" name="tambah" value="input" class="btn btn-danger">Input</button>
    </form>

   <?php
    include 'footer.php'
   ?>

<?php
if (isset($_POST['tambah'])){
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $harian=$_POST['nilaiharian'];
    $quiz=$_POST['nilaiquiz'];
    $uas=$_POST['nilaiuas'];
    $uts=$_POST['nilaiuts'];
    $nilai=($harian*10/100)+($quiz*15/100)+($uts*40/100)+($uas*35/100);

    // echo "nilai anda $nilai";
    // echo $contoh;
}

if($nilai<=50){
    echo " <div class='alert alert-danger' role='alert'> Grade yang diperoleh oleh Nama $nama dengan Nim $nim dan Jurusan $jurusan nilai diperoleh $nilai adalah : E <br>";
}

else if($nilai <=65){
    echo "  <div class='alert alert-warning' role='alert'> Grade yang diperoleh oleh Nama $nama dengan Nim $nim dan Jurusan $jurusan nilai diperoleh $nilai adalah : D";
}

else if($nilai <=72){
    echo "  <div class='alert alert-primary' role='alert'>  Grade yang diperoleh oleh Nama $nama dengan Nim $nim dan Jurusan $jurusan nilai diperoleh $nilai adalah : C";
}

else if($nilai <=83){
    echo " <div class='alert alert-success' role='alert'>  Grade yang diperoleh oleh Nama $nama dengan Nim $nim dan Jurusan $jurusan nilai diperoleh $nilai adalah : B";
}

else if($nilai <=100){
    echo " <div class='alert alert-success' role='alert'> Grade yang diperoleh oleh Nama $nama dengan Nim $nim dan Jurusan $jurusan nilai diperoleh $nilai adalah : A";
}

else{
    echo" <div class='alert alert-danger' role='alert'> $nama dengan $nim dan $jurusan dinyatakan tidak lulus";
}
?>