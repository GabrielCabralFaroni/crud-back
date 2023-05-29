<?php 
include 'conexao.php';
$conn = mysqli_connect('localhost', 'root', '', 'usuarios');
$id = $_GET['id'];
$buscar_usuarios = "SELECT * FROM `usuarios` WHERE `id` = $id";
$result = mysqli_query($conn, $buscar_usuarios);
$usuario = $result->fetch_assoc();
$object = (object) 
[ 
'id' => $usuario['ID'],
'nome' => $usuario['NOME'],
'data_nascimento' => $usuario['DATA_NASCIMENTO'],
'cpf' => $usuario['CPF']
];
header('Content-Type: application/json');
echo json_encode($object);
?>

