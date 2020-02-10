<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // // echo "hello world <br>";
    // // print "i'm learning PHP Script Language now";

    $nama="Suhairy";
    $alamat="Punge Blang Cut";
    $nohp="085260118387 <br>";

    $hasil="";
    if($hasil=="Suhairy"){
        echo($nama);
    }else if($hasil=="Punge Blang Cut"){
        echo($alamat);
    }else{
        echo($nohp);
    }

    
    ?>
    <?php
        $a=10;
        $b=20;

        function myTest(){
            global $a;
            global $b;
            echo ($a)+($b);
        }
        myTest();
    ?>


    <?php
        global $a;
        $a="abc"; 

        global $b;
        $b="hery";

        echo $GLOBALS["a"]="abc  <br>";
        echo $GLOBALS["b"]="hery";
    ?>

</body>
</html>