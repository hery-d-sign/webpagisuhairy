<?php
    include '../koneksi/koneksi.php';

    if(isset($_POST['registrasi'])){
        $id=uniqid();
        // $id=$_POST['id_user'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $level=$_POST['level'];      
        
        // query
        $input_query=mysqli_query($koneksi, "insert into user values('$id', '$password', '$username', '$email', '$nama', '$level')") or die (mysqli_error($input_query));

        // die($input_query);
        if($input_query){
            echo"
                <script>alert('Data Berhasil di input dan Silahkan Login')
                    window.location.href='../login_bootstrap.php'
                </script>
            ";
        }else{
            echo "Login Gagal";
        }
}
?>