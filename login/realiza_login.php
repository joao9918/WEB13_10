<?php
session_start();

$servername = 'localhost';
$banco = 'reclama';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$error = [];


$comando = "SELECT id, tipo FROM `usuarios` WHERE cpf like '$cpf' AND senha like '$senha'";

$resultado = $conexao->query($comando);
$linha = $resultado->fetch(PDO::FETCH_ASSOC);

$id = $linha['id'];
$tipo = $linha['tipo'];

if ($resultado->rowCount() > 0) {
    $_SESSION['cpf'] = $cpf;
    $_SESSION['id'] = $id;

    if($tipo == 'usuario')
        header('location: ../main/abrir_reclamacao.php');
    else
        header('location: ../main/admin.php');
} else {
    $error = 'Erro ao realizar o login.';
    header('location: login.php');
}
?>