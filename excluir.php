<?php
include "conexao.php";
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'];
    $buscar_cadastros = "DELETE FROM usuarios WHERE id = $id ";
    $query_cadastros = mysqli_query($conn, $buscar_cadastros) or die(mysqli_error($conn)); } 
else{
    http_response_code(405);
    die('invalid method');   
    }
?>