<?php
    include 'header.php'
?>
<div class="container">
<form method="POST">
    <div class="form-group">
        <label for="harga_barang">Harga Barang</label>
        <input type="number" class="form-control col-sm-6"  name="harga_barang" aria-describedby="harga_barang">
        <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
    </div>

    <div class="form-group">
        <label for="diskon">Diskon</label>
        <input type="number" class="form-control col-sm-6" name="diskon">
    </div>
    <!-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
        <button type="submit" name="tambah" class="btn btn-dark">Input</button>
</form>
<?php
if (isset($_POST['tambah'])){
    $harga_barang=$_POST['harga_barang'];
    $diskon=$_POST['diskon'];
    $syarat=400000;
    $hargabeli=$harga_barang-$harga_barang*$diskon/100;

if($harga_barang>=$syarat){
    echo " <div class='alert alert-success' role='alert'> $hargabeli";
}
    else{
    echo " <div class='alert alert-danger' role='alert'> tidak mendapat diskon";
}
}
?>
</div>


<?php
    include 'footer.php'
?>

