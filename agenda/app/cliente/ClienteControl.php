<?php

include_once __DIR__ . '/ClienteView.php';
include_once __DIR__ . '/Cliente.php';

class ClienteControl
{

    // Método que trata a requisição do usuário

    public function handleRequest($action, $params)
    {

        // Verifica se requisição é Post
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            switch ($action) {
                case 'cadastrar':
                    $nome = $params['nome'];
                    $sobrenome = $params['sobrenome'];
                    $data_nascimento = $params['data_nascimento'];
                    $genero = $params['genero'];
                    $telefone = $params['telefone'];
                    $email = $params['email'];
                    $senha = $params['senha'];

                    $cliente = new Cliente(null, $nome, $sobrenome, $data_nascimento, $genero, $telefone, $email, $senha);

                    if ($cliente->cadastrar()) {
                        $_SESSION['message'] = [
                            'text' => 'Seu cadastro foi realizado com sucesso.',
                            'type' => 'success'
                        ];
                        echo "Seu cadastro foi realizado com sucesso";
                    } else {
                        $_SESSION['message'] = [
                            'text' => 'Ocorreu um erro ao cadastrar a empresa.',
                            'type' => 'error'
                        ];
                        echo "Ocorreu erro ao realizar seu cadastro";
                    }

                    header('Location: ?control=index');
                    exit(); // Garante que o redirecionamento ocorra e o script não continue
                    break;


                case 'atualizar':
            }
        } else {
            switch ($action) {
                case 'listar':
                    $view = new ClienteView();
                    $view->listarClientes();
                    break;

                case 'novo':
                    // Exibir formulário de cadastro do cliente
                    $view = new ClienteView();
                    $view->exibirFormularioCadastro();
                    break;

                case 'atualizar':

                    break;

                case 'apagar':

                    break;
            }
        }
    }
}