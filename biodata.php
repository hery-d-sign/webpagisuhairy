<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" name="input">
        Nama Anda : <input type="text" name="nama"><br>
        <input type="submit" name="input" value="input">    
    </form>
</body>
</html>

<?php
if (isset($_post['input'])){
    $nama=$_post['nama'];
    echo "nama anda : <b>$nama</b>";
}
?>