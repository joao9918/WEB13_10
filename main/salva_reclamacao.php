<?php
session_start();

$servername = 'localhost';
$banco = 'reclama';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);


$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

//file
$nome_arquivo = $_FILES['arquivo']['name'];
$atual = $_FILES['arquivo']["tmp_name"];
$destino = 'imagens/' . $nome_arquivo;
$resultado_foto = move_uploaded_file($atual, $destino);

//id atual
$id = $_SESSION['id'];

$comando = "INSERT INTO `reclamacao` (`id`, `id_reclamante`, `titulo`, `descricao`, `foto`, `estado`, `aprovacao`, `comentario`) VALUES (NULL, '$id', '$titulo', '$descricao', '$destino', NULL, 'pendente', '')";

// preparar
$sth = $conexao->prepare($comando);

// executar
$resultado = $sth->execute();

// verificar resultado
if($resultado) {
    header("location: navbar.php");

} else {
    echo "<br>Erro ao salvar o usuário.";
}
?>