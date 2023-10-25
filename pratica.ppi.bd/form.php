<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Cadastro de Compra</h1>
    <form action="ws/cadastrar.php" class="container">
        <div class="row">
            <div class="col-sm-6">
                <label for="nome" class="form-label">Nome do Item:</label>
                <input type="text" name="nomeTxt" id="nome" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="valor" class="form-label">Valor do Item:</label>
                <input type="number" step="0.01" name="valorNum" id="valor" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="qtd" class="form-label">Quantidade:</label>
                <input type="number" name="qtdNum" id="qtd" class="form-control">
            </div>
        </div>
        <div class="mt-3">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>