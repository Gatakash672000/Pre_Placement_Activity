<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "ppa";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}

// $conn=mysqli_connect('localhost','root','','cee')

 ?>