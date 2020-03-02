<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include 'header.php';
    ?>
</head>
<body>
<div class="container">
    <form action="proses/proses_biodata.php" method="POST" name="tambah" enctype="multipart/form-data">
    
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control col-sm-2" placeholder="masukan nama">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control col-sm-2" placeholder="masukkan alamat">
    </div>

    <div class="form-group">
        <label for="no hp">No Handphone</label>
        <input type="number" class="form-control col-sm-2" name="no_hp" placeholder="masukkan no handphone">
    </div>

    <div class="form-group">
        <label for="hobby">Hobby</label>
        <div class="col-sm-4">
        <input type="checkbox" name="hobby1" id="inputEmail" value="Makan"> Makan
        <input type="checkbox" name="hobby2" id="inputEmail" value="Jalan-jalan"> Jalan-jalan
        <input type="checkbox" name="hobby3" id="inputEmail" value="Membaca"> Membaca
        <input type="checkbox" name="hobby4" id="inputEmail" value="Ngoding"> Ngoding
        </div>
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="radio" name="JK" value="Laki-laki">Laki-Laki;
        <input type="radio" name="JK" value="Perempuan">Perempuan;
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="lahir" class="form-control col-sm-2">
    </div>

    <div class="form-group">
        <label>Email</label>    
        <input type="email" name="email" class="form-control col-sm-2" placeholder="email@email">
    </div>
    
    <!-- <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat" class="form-control col-sm-2" placeholder="masukkan tempat lahir">
    </div> -->

    <div class="form-group">
        <label for="inputEmail">Upload File</label> <br>
        <div class="btn btn-primary btn-sm-float-left">    
        <input class="file-path validate" name="foto" type="file">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" class="btn btn-primary" name="tambah" value="Submit">
        </div>
    </div>
    </form>
    
</div>

<?php
    include 'footer.php';
?>
</body>
</html>

