<?php
    //connection
    $db = new PDO("sqlite:../compras_bd");
    
    //get variable
    $nome = $_GET["nomeTxt"];
    $valor = $_GET["valorNum"];
    $qtd = $_GET["qtdNum"];

    //Insert
    $q = $db->prepare("INSERT INTO itens_compras (nome, valor, qtd) 
            VALUES (:nome, :valor, :qtd)");
    
    $q->bindParam(":nome", $nome);
    $q->bindParam(":valor", $valor);
    $q->bindParam(":qtd", $qtd);

    //run query
    $q->execute();

    header("Location: http://localhost:8081/index.php");
    exit;
?>