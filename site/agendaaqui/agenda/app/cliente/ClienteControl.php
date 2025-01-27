<?php

include_once __DIR__ . '/ClienteView.php';

class ClienteControl 
{
    // Método que trata a requisição do usuário
    public function handLerequest($action, $params)
    {
        // Verifica se a requisição é POST e se existe uma ação
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            switch ($action) {
                case 'cadastrar':
                    // Chamar método para cadastrar cliente
                    $this->cadastrarCliente($params);
                    break;

                case 'atualizar':
                    // Chamar método para atualizar cliente
                    $this->atualizarCliente($params);
                    break;

                default:
                    echo "Ação inválida para requisição POST.";
            }
        } else {
            switch ($action) {
                case 'listar':
                    // Chamar método para listar clientes
                    $this->listarClientes();
                    break;

                case 'novo':
                    // Exibir formulário de cadastro do cliente
                    $view = new ClienteView();
                    $view->exibirFormularioCadastro();
                    break;

                case 'atualizar':
                    // Chamar método para exibir formulário de atualização
                    $this->exibirFormularioAtualizacao($params);
                    break;

                case 'apagar':
                    // Chamar método para apagar cliente
                    $this->apagarCliente($params);
                    break;

                default:
                    echo "Ação inválida para requisição GET.";
            }
        }
    }

    // Métodos adicionais para tratar as ações
    private function cadastrarCliente($params)
    {
        echo "Cadastrando cliente...";
        // Lógica para cadastro
    }

    private function atualizarCliente($params)
    {
        echo "Atualizando cliente...";
        // Lógica para atualização
    }

    private function listarClientes()
    {
        echo "Listando clientes...";
        // Lógica para listar clientes
    }

    private function exibirFormularioAtualizacao($params)
    {
        echo "Exibindo formulário de atualização...";
        // Lógica para exibir formulário
    }

    private function apagarCliente($params)
    {
        echo "Apagando cliente...";
        // Lógica para apagar cliente
    }
}
?>
