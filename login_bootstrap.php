<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        include 'header.php';
    ?>
</head>
<body>
    <div class="container">
    <form action="proses/proses_login.php" method="POST">
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" name="username" class="form-control col-sm-2" id="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control col-sm-2" id="input_password">
        </div>

        <input type="submit" name="login" class="btn btn-success"></input>
    </form>
    </div>


    <?php
        include 'footer.php'
    ?>
</body>
</html>