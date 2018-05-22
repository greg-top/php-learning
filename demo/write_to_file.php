<?php

if (! is_dir('test/')) {
    mkdir('test/', 0777, true);
}

//set file path and name
$file = "test/example.txt";

//try to open a file
if ( $handle = fopen($file, 'w') ) {
    fwrite($handle, 'Hello PHP');
}

// close a file
fclose($handle);