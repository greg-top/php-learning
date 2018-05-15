<?php

$cookieName = 'firstName';
$cookieValue = 'Grzegorz';
$cookieExpDate = time() + (60*60*24*7); //week expiration date

setcookie($cookieName, $cookieValue, $cookieExpDate);

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

<?php

if  ( isset($_COOKIE['firstName']) ) {
    echo $_COOKIE['firstName'];
}
?>

</body>
</html>