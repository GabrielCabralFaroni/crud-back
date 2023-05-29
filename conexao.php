<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
$hostname = 'localhost';
$user = 'root'; 
$password = ''; 
$database = 'usuarios';
$conn = mysqli_connect( $hostname, $user, $password, $database );
?>
