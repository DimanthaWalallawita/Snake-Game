<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "cisgame";

    $connection = mysqli_connect($host,$username,$password,$db);

    if(!$connection){
        die("Database connection errror");
    }
?>