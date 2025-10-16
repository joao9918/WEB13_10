<?php
include('navbar_adm.php');

$servername = 'localhost';
$banco = 'reclama';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=$servername;dbname=$banco", $username, $password);

$comando = " SELECT r.*, u.nome FROM reclamacao r LEFT JOIN usuarios u ON r.id_reclamante = u.id";


// executa
$stmt = $conexao->query($comando);

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
    <div class="container d-flex align-items-center" style="flex-direction:column">
        <div class="text-center m-5">
            <h2>Reclações</h2>
        </div>
        <div class="row justify-content-center">
            <?php
            if (empty($resultados)) {
                echo "Nenhuma reclamação encontrada.";
            } else {
                foreach ($resultados as $linha) {
                    if ($linha["aprovacao"] == 'pendente')
                        $color = 'text-primary-emphasis';
                    else if ($linha["aprovacao"] == 'aprovado')
                        $color = 'text-success';
                    else
                        $color = 'text-danger';
                    echo '
                    <div class="col-4 mx-auto">
                        <div class="card mb-3" style="width: 20rem;">
                            <img src="' . $linha["foto"] . '" class="card-img-top small-image-container center-image" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">' . $linha["titulo"] . '</h5>
                                <p class="card-text">' . $linha["descricao"] . '</p>
                                <p class="card-text"><b>ID: </b>' . $linha["id_reclamante"] . '</p>
                                <p class="card-text"><b>Nome: </b>' . $linha["nome"] . '</p>
                                <p class="card-text"><small class="'.$color.'"><b>'.$linha["aprovacao"].'</b></small></p>
                                <form action="altera_aprovacao.php" method="post">
                                    <label for="aprovacao">Aprovação:</label>
                                    <select name="aprovacao" id="aprovacao" class="form-select">
                                        <option value="pendente">Pendente</option>
                                        <option value="aprovado">Aprovado</option>
                                        <option value="reprovado">Reprovado</option>
                                        <input type="hidden" name="id" value="' . $linha['id'] .'">
                                    </select>
                                    <div class="mt-3">
                                        <input type="submit" class="btn btn-secondary" value="Alterar">
                                        <a href="remover_reclamacao.php?id=' . $linha["id"] . '" class="btn btn-danger">Excluir</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                ';
                }
                ?>
            </div>
            <?php
            }
            ?>
    </div>
</body>

</html>