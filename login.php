
    <?php

    $user="suhairy";
    $pass="8387";

    if($user == "suhairy" && $pass == "8387"){
        echo "Login Berhasil <br> <br>";
    }
    else{
        echo "Login Gagal";
    }
    ?>

    <?php
    $username="admin";
    $password="admin123";

    if($username=="admin"&&$password=="admin123"){
        echo "lari kehalaman admin <br> <br>";
    }else if($username=="siswa"&&$password=="siswa123"){
        echo "lari kehalaman siswa";
    }else{
        echo "username dan password salah";
    }
    // ?>


    <?php
    $user="";

    if(!isset($user)){
        echo "variabel tidak ada/belum terbentuk";
    }else{
        echo "variabel ada";
    }

    ?>
</body>
</html>