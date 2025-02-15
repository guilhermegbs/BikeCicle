<?php

class IndexView
{
    // Método para exibir a página inicial
    function exibirPaginaInicial()
    {

        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message']['text'];
            $messageType = $_SESSION['message']['type'];

            // Mapeando o tipo da mensagem para as classes do Bootstrap
            $alertClass = ($messageType == 'success') ? 'alert-success' : 'alert-danger';

            echo "<div class='container mt-3'>";
            echo "<div class='alert $alertClass text-center' role='alert'>$message</div>";
            echo "</div>";

            // Limpa a mensagem após exibi-la
            unset($_SESSION['message']);
        }

        // HTML para a página inicial
        echo "
            <div class='container mt-5'>
                <div class='row justify-content-center'>
                    <div class='col-md-6 text-center'>
                        <h1 class='mb-4'>Bem-vindo ao AgendaAqui</h1>
                        <p class='lead mb-4'>Escolha uma opção para continuar:</p>
            ";


        if (isset($_SESSION['user_id'])) {
            echo " <!-- Botão para acessar a lista de serviços -->
                        <a href='index.php?control=servicos&action=listar' class='btn btn-primary btn-lg btn-block mb-3'>
                            Acessar Lista de Serviços
                        </a>
                        
                        <a href='index.php?control=login&action=logout' class='btn btn-primary btn-lg btn-block mb-3'>
                            Sair
                        </a>";
        } else {
            echo " <!-- Botão para realizar auto cadastro -->
                        <a href='index.php?control=cliente&action=novo' class='btn btn-success btn-lg btn-block mb-3'>
                            Realize seu cadastro
                        </a>

                         <!-- Botão para realiar login -->
                        <a href='index.php?control=login' class='btn btn-primary btn-lg btn-block mb-3'>
                            Fazer login
                        </a>";
        }

        echo "
               <!-- Botão para acessar a página de administração -->
                <a href='admin/' class='btn btn-secondary btn-lg btn-block'>
                    Acessar Página de Administração
                </a>
                </div>
            </div>
        </div>
        ";
    }
}
