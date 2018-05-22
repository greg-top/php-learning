<?php

if (! is_dir('test/')) {
    mkdir('test/', 0777, true);
}

//set file path and name
$file = "test/example.txt";

//try to open a file
if ( $handle = fopen($file, 'r') ) {

    //fread - 1st file, 2nd - how many bytes to read, I used filesize function to read all data from file
   echo fread($handle,filesize($file));
}

// close a file
fclose($handle);