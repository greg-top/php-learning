<?php

print_r($_GET);
if ( isset($_GET['id']) ) {
    $id = $_GET['id'];
    if ($id === '10') {
        echo 'YEAH';
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

<?php
$id = 10;
$button = 'CLICK HERE';
?>

<a href="get.php?id=<?php echo $id ?>"><?php echo $button ?></a>

</body>
</html>