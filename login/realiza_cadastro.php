<?php
$servername = 'localhost';
$banco = 'reclama';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);


$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$data = $_POST['data'];
$senha = $_POST['senha'];


$comando = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cpf`, `data`, `tipo`) VALUES (NULL, '$nome', '$email', '$senha', '$cpf', '$data', 'usuario')";

// preparar
$sth = $conexao->prepare($comando);

// executar
$resultado = $sth->execute();

// verificar resultado
if($resultado) {
    header('location: login.php');
} else {
   echo "Erro ao salvar o usuário.";
}
?>