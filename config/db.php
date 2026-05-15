<?php
$host = "localhost";
$user ="root";
$pass ="";
$db ="code";

$conn mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("error de conexión");
}