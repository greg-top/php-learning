<?php

$connection = mysqli_connect('localhost', 'root','root','phplearning');

if (!$connection) {
    die("DB connection failed");
}