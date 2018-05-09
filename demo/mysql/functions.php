<?php

require "db.php";

// get all data from specific table from phplearning database
 function getTableData ($tableName) {
     //$connection exists in another file so make it GLOBAL
     global $connection;
     $query = "SELECT * FROM . $tableName";

     $result =  mysqli_query($connection, $query);

     if (!$result) {
         die('Query Failed' . mysqli_error($connection));
     }

     return $result;
 }

 //insert data to table users
 function insertUserData() {
     //$connection exists in another file so make it GLOBAL
     global $connection;
     $username = mysqli_real_escape_string($connection, $_POST['username']); //sanitize data
     $password = mysqli_real_escape_string($connection, $_POST['password']);

     $query = "INSERT INTO users(username, password) ";
     $query .= "VALUES ('$username', '$password')";

     $result =  mysqli_query($connection, $query);

     if (!$result) {
         die('Query Failed' . mysqli_error($connection));
     }

     return $result;
 }

 // update rows in table users via id column
 function updateUserData () {
     //$connection exists in another file so make it GLOBAL
     global $connection;

         $username = $_POST['username'];
         $password = $_POST['password'];
         $id = $_POST['userId'];

         $query = "UPDATE users SET";
         $query .= " username = '$username', ";
         $query .= " password = '$password' ";
         $query .= " WHERE id = $id";

         $result = mysqli_query($connection, $query);

         if (!$result) {
             die("wrong update query". mysqli_error($connection));
         }

         return $result;
 }

 // delete rows in table users via id column
function deleteFromUsers ($tableName) {
//$connection exists in another file so make it GLOBAL
    global $connection;

    $id = $_POST['userId'];

    $query = "DELETE FROM . $tableName";
    $query .= " WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("wrong delete query". mysqli_error($connection));
    }

    return $result;
}

function showSuccessMessage ($message) {
     echo  $message;
}