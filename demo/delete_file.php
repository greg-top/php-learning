<?php

//if (! is_dir('test/')) {
//    mkdir('test/', 0777, true);
//}

if ( file_exists('test/example.txt') ) {
    echo 'file exists';
    unlink('test/example.txt');
}

rmdir('test');

