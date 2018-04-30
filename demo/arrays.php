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

$numberList = array(23,64,36,12,45,'Grzegorz','<h1>Grzegorz Topolewski</h1>');

echo $numberList[0];
echo "<br>";
print_r($numberList);

echo "<br>";
$numberList2 = ["name"=>'Grzegorz'];
print_r($numberList2);
?>

</body>
</html>