<?php

require_once 'db.php';

function criar_cliente(){
    if(
    isset($_POST['nome_cliente']) && 
    isset($_POST['email_cliente']) &&
    isset($_POST['cpf_clinte']) &&
    isset($_POST['telefone_cliente'])
    ){
        
        $nome_cliente = $_POST['nome_cliente'];
        $email_cliente = $_POST['email_cliente'];
        $cpf_clinte = $_POST['cpf_clinte'];
        $telefone_cliente = $_POST['telefone_cliente'];
    }

    $query_criar = "INSERT INTO cliente (nome_cliente, email_cliente, cpf_clinte, telefone_cliente ) VALUES ($nome_cliente,$email_cliente, $cpf_clinte, $telefone_cliente )";
    return $query_criar;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $conn->query(criar_cliente());
}


?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie seu usuário</title>
</head>
<body>

    <h1>Crie seu usuário</h1>
    <form action="cliente.php" method="POST">
        <label for="nome" name="nome_cliente">Insira seu nome:</label></br>
        <input type="text" name="nome_cliente" required></br></br>
        <label for="email" name="email_cliente">Insira seu email:</label></br>
        <input type="text" name="email_cliente" required></br></br>
        <label for="cpf">Insira seu CPF:</label></br>
        <input type="text" name="cpf_clinte" required></br></br>
        <label for="telefone" name="telefone_cliente">Insira seu telefone:</label></br>
        <input type="text" name="telefone_cliente" required></br></br>
        <input type="submit"  name="enviar_dados_cliente">

    </form>

    <a href="ver_solicitacoes.php">Ir para solicitações</a>
    
</body>
</html>


