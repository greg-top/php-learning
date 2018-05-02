<?php

if ( isset($_POST['submit']) ) {

    $names = ["Grzegorz", "Piotrek", "Samuel", "Magdalena"];
    $minimum = 5;

    $username = $_POST['username'];
    $password = $_POST['password'];

    // to create sign up form
    if ( strlen($username) < $minimum )  {
        echo "username has to be longer than 5";
    }
//    if ( isset($_POST['password']) ) {
//        echo "password(encrypted): " . crypt($password,"hjasdgyudgayudt6635gjsdhfksf");
//    }

    // to create sign in form
    if (in_array($username, $names)) {
        echo "Welcome back: " . $username;
    } else {
        echo "Wrong login";
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
</head>
<body>

<form action="form_process.php" method="post">
    <input type="text" placeholder="Enter username" name="username">
    <input type="password" placeholder="Enter password" name="password"><br>
    <input type="submit" name="submit">
</form>

<?php



?>
</body>
</html>