<?php
$servername = 'localhost';
$banco = 'reclama';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);

// Pega o id via GET
$id = $_GET['id']; 

// Prepara a query com parâmetro
$stmt = $conexao->prepare("DELETE FROM reclamacao WHERE id = :id");

// Associa o parâmetro
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// Executa
$stmt->execute();


// Redireciona
header("Location: admin.php");
exit;
?>
