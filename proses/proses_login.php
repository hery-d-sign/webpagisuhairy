<?php
include '../koneksi/koneksi.php';

        if(isset($_POST['login'])){
            $username=$_POST['username'];
            $input_password=$_POST['password'];

            // query
            $login=mysqli_query($koneksi, "select * from user where username='$username' and password='$input_password'");

            // pengecekan
            $cek=mysqli_num_rows($login);

            // menampilkan definisi data
            $data=mysqli_fetch_assoc($login);

            if($cek>0){
                if($data['level']=="penjual"){
                    $_SESSION['username']=$data['username'];
                    $_SESSION['level']=$data['level'];
                    $_SESSION['status']='login';

                    echo"<script>
                    alert(window.location.href='../latihan.php');
                    </script>";
                }else if($data['level']=="pembeli"){
                    $_SESSION['username']=$data['username'];
                    $_SESSION['level']=$data['level'];
                    $_SESSION['status']='login';

                    echo"<script>
                    alert(window.location.href='../mahasiswabootstrap.php');
                    </script>";
            }else{
                echo"data gagal";
            }

            // if($username=='admin'&&$input_password=='admin123'){
                // header('location: latihanbiodata.php');
            // }else if($username=='siswa'&&$input_password=='siswa123'){
                
            // }else{
            //     echo "<div class='alert alert-danger' role='alert'>Login Gagal</div>";
            // }

        }
    }
    ?>