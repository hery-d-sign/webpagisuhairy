<?php
    include 'header.php'
?>
<div class="container">
<form action="" method="POST">
    <div class="form-group">
        <label for="nama_barang">Nama Barang :</label>
        <input type="text" name="nama_brg" class="form-control col-sm-6" id="nama_barang">
    </div>

    <div class="form-group">
        <label for="harga_barang">Harga Barang :</label>
        <input type="number" name="harga" class="form-control col-sm-6" id="harga_barang">
    </div>

    <input type="submit" name="bayar" class="btn btn-dark" value="Bayar"></input>
</form>
</div>

<?php
    if(isset($_POST['bayar'])){
        $nama_barang=$_POST['nama_brg'];
        $harga_barang=$_POST['harga'];
        $diskon=50/100;
        if ($harga_barang>=400000){
            echo" 
                <div class='alert alert-success' role='alert'> harga diskon yang diperoleh sebesar Rp. ", $harga_barang*$diskon;
        
            echo"
            dan harga $nama_barang yang harus dibayar sebesar Rp.", $harga_barang-($harga_barang*$diskon);
            echo" </div>";
        }
    }    
?>
</div>


