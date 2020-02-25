<?php
    include 'header.php'
?>
<div class="container">
<form action="proses/proses_diskon.php" method="POST">
    <div class="form-group">
        <label for="nama_barang">Nama Barang :</label>
        <input type="text" name="nama_barang" class="form-control col-sm-6" id="nama_barang">
    </div>

    <div class="form-group">
        <label for="harga_barang">Harga Barang :</label>
        <input type="number" name="harga_barang" class="form-control col-sm-6" id="harga_barang">
    </div>

    <div class="form-group">
        <label for="stok barang">Stok Barang :</label>
        <input type="number" name="stok_barang" class="form-control col-sm-6" id="stok_barang">
    </div>

    <div class="form-group">
        <label for="kategori">Kategori :</label>
        <input type="text" name="kategori" class="form-control col-sm-6" id="kategori">
    </div>

    <input type="submit" name="input" class="btn btn-dark" value="Input"></input>
</form>
</div>


<?php
// include 'koneksi/koneksi.php';

    if(isset($_POST['input'])){
        $nama_barang=$_POST['nama_brg'];
        $harga_barang=$_POST['harga'];
        $stok_barang=$_POST['stok_barang'];
        $kategori=$_POST['kategori'];
        $diskon=50/100;

        // $input=mysqli_query($koneksi, "select * from stok ";

        if ($harga_barang>=400000){
            echo" 
                <div class='alert alert-success' role='alert'> harga diskon yang diperoleh sebesar Rp. ", $harga_barang*$diskon;
        
            echo"
            dan harga $nama_barang yang harus dibayar sebesar Rp.", $harga_barang-($harga_barang*$diskon);
            echo" </div>";
        }else {
            echo "<div class='alert alert-danger' role='alert'> tidak mendapat diskon";
        }
    }  

?>
</div>

<?php
include 'footer.php'
?>

