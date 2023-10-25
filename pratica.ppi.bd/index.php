<?php
    //connection
    $db = new PDO("sqlite:compras_bd");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Lista de Compras</h1>
    <nav class="list-group list-group-horizontal ms-3">
        <a href="index.php" class="list-group-item">Home</a>
        <a href="form.php" class="list-group-item">Cadastrar Compra</a>
    </nav>

    <table class="table container mt-3">
        <tr>
            <th>Nome do Item</th>
            <th>Valor</th>
            <th>Quantidade</th>
        </tr>
        <?php
            $q = $db->query("SELECT * FROM itens_compras");
            $compras = $q->fetchAll();

            foreach($compras as $itens):
        ?>
        <tr>
            <td><?=$itens->nome?></td>
            <td><?=$itens->valor?></td>
            <td><?=$itens->qtd?></td>
        </tr>
        <?php
            endforeach;
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>