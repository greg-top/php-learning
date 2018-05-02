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
$name = "Grzegorz Topolewski";

echo strlen($name);

echo "<br>";

echo strtoupper($name);

echo "<br>";

echo strtolower($name);

echo "<br>";

$nameHex = bin2hex($name);
echo $nameHex;

echo "<br>";

echo hex2bin($nameHex);

echo "<br>";

echo chunk_split($name,1,"-");

echo "<br>";

echo crypt($name,'$6$rounds=5000$anexamplestringforsalt$');

echo "<br>";

$nameArray = explode(" ", $name);
print_r($nameArray);

echo "<br>";
$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str);

echo "<br>";
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);
?>
</body>
</html>