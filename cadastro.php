<?php
include "conexao.php";
$conn = mysqli_connect('localhost', 'root', '', 'usuarios');
$data=json_decode(file_get_contents('php://input'),true);
$nome = $data['nome'];
$cpf = $data['cpf'];
$data_nascimento = $data['data_nascimento'];
$query = "INSERT INTO `usuarios` (nome, cpf, data_nascimento) VALUES ('$nome', '$cpf', '$data_nascimento')";
$query_usuarios = mysqli_query($conn, $query);
?>