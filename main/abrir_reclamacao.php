<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamacao</title>
</head>
<body>
    <div class="container">
        <div class="text-center m-5" >
            <h2>Reclamação</h2>
        </div>
        <form action="salva_reclamacao.php" method="post" enctype="multipart/form-data">
            <div class="form-floating pb-3">
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Digite o titulo">
                <label for="titulo" class="label-form">Digite o titulo</label>
            </div>
            <div class="form-floating pb-3">
                <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Digite a descrição">
                <label for="descricao" class="label-form">Digite a descrição</label>
            </div>
            <div class="form-floating pb-3">
                <input type="file" class="form-control" name="arquivo" id="arquivo" placeholder="Envie a imagem">
                <label for="arquivo" class="label-form">Envie a imagem</label>
            </div>
            <div class="form-floating pb-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>