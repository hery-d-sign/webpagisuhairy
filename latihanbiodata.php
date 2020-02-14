<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses/proses_biodata.php" method="POST" name="tambah">
    <label>Nama</label>
    <input type="text" name="nama" placeholder="masukan nama"> <br> <br>
    <label>Email</label>    
    <input type="email" name="email" placeholder="email@email"><br> <br>
    <label>Jenis Kelamin</label>
    <input type="radio" name="JK" value="Laki-laki">Laki-Laki;
    <input type="radio" name="JK" value="Perempuan">Perempuan; <br> <br>
    <label>Alamat</label>
    <input type="textarea" name="alamat" placeholder="masukkan alamat"> <br> <br>
    <label>Tanggal Lahir</label>
    <input type="date" name="lahir"> <br> <br>
    <label>Tempat Lahir</label>
    <input type="text" name="tempat" placeholder="masukkan tempat lahir"> <br> <br>
    <label>No Hp</label>
    <input type="number" name="1234567891012" placeholder="masukkan no hp"> <br> <br>
    <label>Hobby</label>
    <input type="checkbox" name="Hobby1" value="Mancing">Mancing;
    <input type="checkbox" name="Hobby2" value="Catur">Catur;
    <input type="checkbox" name="Hobby3" value="Nonton">Nonton;
    <input type="checkbox" name="Hobby4" value="Bulutangkis">Bulutangkis; <br> <br>
    <input type="submit" name="tambah" value="Submit">
    </form>
</body>
</html>

