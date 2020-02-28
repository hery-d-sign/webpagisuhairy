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
    <form action="proses/proses_biodata.php" method="POST" name="tambah">
    <div class="container">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control col-sm-2" placeholder="masukan nama">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="textarea" name="alamat" class="form-control col-sm-2" placeholder="masukkan alamat">
    </div>

    <div class="form-group">
        <label for="no hp">No Handphone</label>
        <input type="number" class="form-control col-sm-2" name="no_hp" placeholder="masukkan no handphone">
    </div>

    <div class="form-group">
        <label for="hobby">Hobby</label>
        <input type="text" class="form-control col-sm-2" name="hobby" placeholder="masukkan hobby">   
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

    <input type="submit" name="tambah" value="Submit">
    </form>
    </div>

<?php
    include 'footer.php';
?>
</body>
</html>

