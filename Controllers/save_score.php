<?php
include("../Model/databaseConnecton.php");
session_start();
if(!isset($_SESSION["username"])){
    header("location: ../View/login.php");
}

$id = $_SESSION["id"];
$name = $_SESSION["name"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['scorephp'])) {
        $score = $_POST['scorephp'];

        $sql = "INSERT INTO `score` (`id`, `name`, `score`) VALUES (".$id.", '".$name."', ".$score.")";
        mysqli_query($connection, $sql);

        http_response_code(200);
        exit();
    } 
    
    else {
        http_response_code(400);
        exit();
    }
}
?>