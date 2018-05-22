<?php

if (! is_dir('test/')) {
    mkdir('test/', 0777, true);
}

//set file path and name
$file = "test/example.txt";

//open a file with write mode
$handle = fopen($file, 'w');

// close a file
fclose($handle);