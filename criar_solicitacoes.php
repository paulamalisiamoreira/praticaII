<?php

require_once 'db.php';

function criar_solicitacoes() {
if (
    isset($_POST['']) &&
    isset($_POST['']) &&
    isset($_POST['']) &&
    isset($_POST[''])) {
}
}



?>

<!DOCTYPE html>
<html lang="Pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Solicitação</title>
</head>
<body>
    <h1>Criar Solicitação</h1>
    <form action="criar_solicitacoes.php">
        <label for="titulo" name="titulo">Insira o titulo da solicitação:</label><br>
        <input type="text" name="titulo" required><br><br>
        <label for="descricao" name="descricao">Insira a descricao:</label><br>
        <input type="text" name="descricao" required><br><br>
        <label for="urgencia" name="urgencia">Insira a urgencia:</label><br> <!--fazer paranaue para conseguir pegar por id  -->
        <input type="text" name="urgencia" required><br><br>
        <label for="estatus" name="estatus">Insira o status da solicitação:</label><br>
        <input type="text" name="estatus" required><br><br>
        <label for="data_abertura" name="data_abertura">Insira a data de abertura:</label><br>
        <input type="text" name="data_abertura" required><br><br>
        <input type="submit" >

    </form>
</body>
</html>