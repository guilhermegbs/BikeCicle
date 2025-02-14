<?php
    $servidor = "localhost";
<<<<<<< HEAD
    $dbusuario = "root"; // Correção no nome da variável
    $dbsenha = "";
    $dbname = "aplicacao"; // Mude "agenda" para "aplicacao"
    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    // Verificar conexão
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
?>
=======
    $dbususario = "Agenda";
    $dbsenha = "GBorges@7090";
    $dbname = "agenda";
    $conn = mysqli_connect($servidor,$dbususario,$dbsenha,$dbname);
?>
>>>>>>> 1015e594b7f6086cff5bc772b245c164d9e42205
