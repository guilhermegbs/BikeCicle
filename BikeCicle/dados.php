<?php include_once "config.php"; ?>


    <?php

     $nome  = $_POST['nome'];
     $email = $_POST['email'];
     $senha = $_POST['senha'];
     $telefone = $_POST['telefone'];
     $data_nascimento = $_POST['data_nascimento'];
     $genero = $_POST['genero'];

    $sql = "INSERT INTO cliente(nome,email,senha,telefone,data_nascimento,genero) VALUES('$nome','$email','$senha','$telefone','$data_nascimento','$genero' )";
    if (mysqli_query($conn,$sql)){
        echo "Cadastrado com sucesso!" ;

    }
    else{
        echo "deu erro". $sql . "<br>" . mysqli_error($conn);
    } 
    mysqli_close($conn);
?>