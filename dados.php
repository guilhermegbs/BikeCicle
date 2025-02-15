<?php 
include_once "config.php"; 

$nome = $_POST['nome']; 
$email = $_POST['email']; 
$senha = $_POST['senha']; 
$telefone = $_POST['telefone']; 
$data_nascimento = $_POST['data_nascimento']; 
$genero = $_POST['genero']; 

// Criptografando a senha antes de armazená-la (recomendado)
$senha = password_hash($senha, PASSWORD_DEFAULT);

// Prepara a consulta SQL para evitar injeção de SQL
$stmt = $conn->prepare("INSERT INTO cliente (nome, email, senha, telefone, data_nascimento, genero) VALUES (?, ?, ?, ?, ?, ?)");

// Verifica se a preparação foi bem-sucedida
if ($stmt === false) {
    // Exibe erro de preparação da consulta
    echo "Erro ao preparar a consulta: " . $conn->error;
    exit(); // Encerra a execução caso haja erro
}

// Vincula os parâmetros aos valores
$stmt->bind_param("ssssss", $nome, $email, $senha, $telefone, $data_nascimento, $genero);

// Executa a consulta
if ($stmt->execute()) {
    // Exibe a mensagem de sucesso
    echo "Cadastrado com sucesso!";
    // Redireciona para a página de login após 3 segundos
    header("refresh:3;url=login.php");
    exit();
} else {
    // Caso haja erro, mostra a mensagem de erro
    echo "Erro ao cadastrar: " . $stmt->error;
}

// Fecha a declaração e a conexão
$stmt->close();
$conn->close();
?>
