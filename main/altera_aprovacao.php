<?php
$servername = 'localhost';
$banco = 'reclama';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);




$aprovacao = $_POST['aprovacao'];
$id = $_POST['id'];

$comando = "UPDATE `reclamacao` SET `aprovacao` = '$aprovacao' WHERE `reclamacao`.`id` = $id";


// executa
$stmt = $conexao->query($comando);

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

header("location:admin.php")
?>