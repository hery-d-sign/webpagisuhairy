<?php
    include 'header.php'
?>
    <form action="proses/proses_mahasiswa.php" method="POST">
    <div class="container">
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
        <label for="mata kuliah">Mata Kuliah</label>
        <input type="text" class="form-control col-sm-2" name="mata_kuliah">
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
    </div>

<?php
    include 'footer.php'
?>
<br>

<?php
include 'koneksi/koneksi.php';

$tampil_nilai=mysqli_query($koneksi, "SELECT * FROM mahasiswa")or die(mysqli($tampil_nilai));

while($data=mysqli_fetch_array($tampil_nilai)){
    if($data['nilai_akhir']<=50){
        echo " <div class='alert alert-danger' role='alert'> Nama ".$data['nama_mahasiswa']." dengan Nim ".$data['nim_mahasiswa']." Mata Kuliah ".$data['mata_kuliah']." Jurusan ".$data['jurusan']." memperoleh nilai sebesar ".$data['nilai_akhir']." maka diperoleh grade : E <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."'type='submit' class='btn btn-info'>Update</a><br>

        <a href='proses/proses_hapus_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."'type='submit' class='btn btn-danger' onClick='hapus();'>Hapus</a></div>";
    }
    
    else if($data['nilai_akhir']<=65){
        echo "  <div class='alert alert-warning' role='alert'> Nama ".$data['nama_mahasiswa']." dengan Nim ".$data['nim_mahasiswa']." Mata Kuliah ".$data['mata_kuliah']."  Jurusan ".$data['jurusan']." memperoleh nilai sebesar ".$data['nilai_akhir']." maka diperoleh grade : D <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."'type='submit' class='btn btn-info'>Update</a>
        
        <a href='proses/proses_hapus_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."'type='submit' class='btn btn-danger' onClick='hapus();'>Hapus</a></div>";
    }
    
    else if($data['nilai_akhir']<=72){
        echo "  <div class='alert alert-info' role='alert'> Nama ".$data['nama_mahasiswa']." dengan Nim ".$data['nim_mahasiswa']." Mata Kuliah ".$data['mata_kuliah']." Jurusan ".$data['jurusan']." memperoleh nilai sebesar ".$data['nilai_akhir']." maka diperoleh grade : C <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."'type='submit' class='btn btn-info'>Update</a>
        
        <a href='proses/proses_hapus_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."'type='submit' class='btn btn-danger' onClick='hapus();'>Hapus</a></div>";
    }
    
    else if($data['nilai_akhir']<=83){
        echo " <div class='alert alert-primary' role='alert'> Nama ".$data['nama_mahasiswa']." dengan Nim ".$data['nim_mahasiswa']." Mata Kuliah ".$data['mata_kuliah']." Jurusan ".$data['jurusan']." memperoleh nilai sebesar ".$data['nilai_akhir']." maka diperoleh grade : B <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."'type='submit' class='btn btn-info'>Update</a>
        
        <a href='proses/proses_hapus_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."'type='submit' class='btn btn-danger' onClick='hapus();'>Hapus</a></div>";
    }
    
    else if($data['nilai_akhir']<=100){
        echo " <div class='alert alert-success' role='alert'> Nama ".$data['nama_mahasiswa']." dengan Nim ".$data['nim_mahasiswa']." Mata Kuliah ".$data['mata_kuliah']." Jurusan ".$data['jurusan']." memperoleh nilai sebesar ".$data['nilai_akhir']." maka diperoleh grade : A <a href='edit_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."'type='submit' class='btn btn-info'>Update</a>
        
        <a href='proses/proses_hapus_mahasiswa.php?id_mahasiswa=".$data['id_mahasiswa']."'type='submit' class='btn btn-danger' onClick='hapus();'>Hapus</a></div>";
    }
    
    else{
        echo" <div class='alert alert-danger' role='alert'> $nama dengan $nim dan $jurusan dinyatakan tidak lulus </div>";
    }

}



    

// if (isset($_POST['tambah'])){
//     $nim=$_POST['nim'];
//     $nama=$_POST['nama'];
//     $jurusan=$_POST['jurusan'];
//     $harian=$_POST['nilaiharian'];
//     $quiz=$_POST['nilaiquiz'];
//     $uas=$_POST['nilaiuas'];
//     $uts=$_POST['nilaiuts'];
//     $nilai=($harian*10/100)+($quiz*15/100)+($uts*40/100)+($uas*35/100);

    // echo "nilai anda $nilai";
    // echo $contoh;
// }

?>