<?php

if ( isset($_POST['submit']) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

//    if ($username && $password) {
//        echo $username . $password;
//    } else {
//        echo "no data entered";
//    }

    $connection = mysqli_connect('localhost', 'root','root','phplearning');

//    print_r($connection);
    if ($connection) {
        echo "we are connected";
    } else {
        die("DB connection failed");
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="col-sm-8">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div>
</div>

</body>
</html>