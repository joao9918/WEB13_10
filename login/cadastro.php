<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="text-center m-5" >
            <h2>Cadastro</h2>
        </div>
        <form action="realiza_cadastro.php" method="post">
            <div class="form-floating pb-3">
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
                <label for="nome" class="label-form">Digite o nome</label>
            </div>
            <div class="form-floating pb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Digite o email">
                <label for="email" class="label-form">Digite o email</label>
            </div>
            <div class="form-floating pb-3">
                <input type="number" class="form-control" name="cpf" id="cpf" placeholder="Digite o cpf">
                <label for="cpf" class="label-form">Digite o cpf</label>
            </div>
            <div class="form-floating pb-3">
                <input type="date" class="form-control" name="data" id="data" placeholder="Digite a data de nascimento">
                <label for="data" class="label-form">Digite a data de nascimento</label>
            </div>
            <div class="form-floating pb-3">
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite a senha">
                <label for="senha" class="label-form">Digite a senha</label>
            </div>
            <div class="form-floating pb-3">
                <input class="btn btn-primary" type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>