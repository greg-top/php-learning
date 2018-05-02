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

