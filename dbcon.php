<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "demo";

$con = mysqli_connect($host,$user,$pass,$database);

if(!$con){
    die("Connection Failed ". mysqli_connect_error());
}
?>