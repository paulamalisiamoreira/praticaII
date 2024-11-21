<?php

// conexão com o banco 


$conn = mysqli_connect("localhost","root","root","solicitacoes");

if (!$conn){
    die("Não deu boa a conexão". mysqli_connect_error());
} else{
    echo "Conexão feita com sucesso!:)";
}

?>