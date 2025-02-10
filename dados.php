<?php 
include_once "config.php"; 

$nome = $_POST['nome']; 
$email = $_POST['email']; // Altere de 'e-mail' para 'email'
$senha = $_POST['senha']; 
$telefone = $_POST['telefone']; 
$data_nascimento = $_POST['data_nascimento']; 
$genero = $_POST['genero']; 

$sql = "INSERT INTO cliente(nome,email,senha,telefone,data_nascimento,genero) 
        VALUES('$nome','$email','$senha','$telefone','$data_nascimento','$genero')";

if (mysqli_query($conn, $sql)) {
    // Exibe a mensagem de sucesso
    echo "Cadastrado com sucesso!";

    // Redireciona para a página de login após 3 segundos
    header("refresh:3;url=login.php");
    exit();
} else {
    // Caso haja erro, mostra a mensagem de erro
    echo "Erro ao cadastrar: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
