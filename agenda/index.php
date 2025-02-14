<?php

// Inicia a sessão no início de todas as páginas
session_start();

//Exibir o header
<<<<<<< HEAD
include_once 'header.php';
=======
include_once 'static/header.php';
>>>>>>> 1015e594b7f6086cff5bc772b245c164d9e42205

// Aciona controlador

// Obter o controle e ação
$control = $_GET['control'] ?? 'index';
$action = $_GET['action'] ?? 'listar';

$controlClass = ucfirst($control) . 'Control';

function loadControl($control, $controlClass)
{

    $file = __DIR__ . '/app/' . $control . '/' .  $controlClass . '.php';
    if (file_exists($file)) {
        include_once $file;
    } else {
        echo "Arquivo do controlador não encontrado.";
        exit;
    }
}

loadControl($control, $controlClass);

if (class_exists($controlClass)) {

    $controller = new $controlClass();

    // Passa os parâmetros (POST e GET)
    $params = array_merge($_POST, $_GET);

    // Executa a ação
    $controller->handleRequest($action, $params);
}


//Exibir o footer
<<<<<<< HEAD
include_once 'footer.php';
=======
include_once 'static/footer.php';
>>>>>>> 1015e594b7f6086cff5bc772b245c164d9e42205
