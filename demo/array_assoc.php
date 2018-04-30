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

$number = [10, 20, 30];
print_r($number);

echo "<br>";

$names = ["first_name" => "Grzegorz", "last_name" => "Topolewski"];
print_r($names);
echo "<br>" . $names["first_name"];
echo " " . $names["last_name"];

?>

</body>
</html>