<?php
include 'conexao.php';
$conn = mysqli_connect('localhost', 'root', '', 'usuarios');
$buscar_usuarios = "SELECT * FROM `usuarios` ";
$result = mysqli_query($conn, $buscar_usuarios);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = [
      'id' => $r['ID'],            // id é como eu quero, ID é o nome certo de como vem do banco.
      'nome' => $r['NOME'],
      'data_nascimento' => $r['DATA_NASCIMENTO'],
      'cpf' => $r['CPF']
    ];}
header('Content-Type: application/json');
echo json_encode($rows);
?>



