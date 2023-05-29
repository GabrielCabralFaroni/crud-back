<?php
include "conexao.php";
function atualizarUsuario($id, $nome, $cpf, $data_nascimento) {
    global $conn;
    $sql = "UPDATE usuarios SET nome = '$nome', cpf = '$cpf', data_nascimento = '$data_nascimento' WHERE id = '$id'";
    $conn->query($sql);
    return $id;}
if ($_SERVER['REQUEST_METHOD'] === 'PUT'){    
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $_GET['id'];
    $nome = $data['nome'];
    $cpf = $data['cpf'];
    $data_nascimento = $data['data_nascimento'];
    $id = atualizarUsuario($id, $nome, $cpf, $data_nascimento);
    echo $id;} 
else{
    http_response_code(405);
    die('invalid method');   
    }
?>

