<?php
    $servidor = "localhost";
    $dbusuario = "root"; // Correção no nome da variável
    $dbsenha = "";
    $dbname = "aplicacao"; // Mude "agenda" para "aplicacao"
    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    // Verificar conexão
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
?>
