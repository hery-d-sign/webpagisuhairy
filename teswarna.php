<?php
    include 'header.php';
?>

<form action="" method="POST">
        <input type="text" name="color">
        <input type="submit" name="tambah" value="Tampil">
</form>

<?php
    if(isset($_POST['tambah'])){
        $color=$_POST['color'];

        $arraycolor=[
            "jambu",
            "apel",
            "mangga"
        ];

        if($color==$arraycolor[0]){
            echo "<p style='color: red'>$color</p>";
        }
        else if($color==$arraycolor[1]){
            echo "<p style='color: pink'>$color</p>";
        }
        else if($color==$arraycolor[2]){
            echo "<p style='color: orange'>$color</p>";
        }
        else{
            echo "<p style='color: dark grey'>$color</p>";
        }
    }
?>

<?php
    include 'footer.php';
?>

