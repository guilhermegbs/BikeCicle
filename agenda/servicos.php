<?php
// Página de cadastro de serviços (index.php)
echo "
    <div class='container mt-5'>
        <div class='row justify-content-center'>
            <div class='col-md-6 text-center'>
                <h1 class='mb-4'>Cadastro de Serviços</h1>
                <p class='lead mb-4'>Preencha os dados para cadastrar um novo serviço:</p>
                
                <!-- Formulário de cadastro de serviço -->
                <form action='index.php?control=servicos&action=salvar' method='POST'>
                    <div class='form-group'>
                        <label for='nomeServico'>Nome do Serviço</label>
                        <input type='text' class='form-control' id='nomeServico' name='nomeServico' required>
                    </div>

                    <div class='form-group'>
                        <label for='descricaoServico'>Descrição do Serviço</label>
                        <textarea class='form-control' id='descricaoServico' name='descricaoServico' rows='3' required></textarea>
                    </div>

                    <div class='form-group'>
                        <label for='precoServico'>Preço</label>
                        <input type='number' class='form-control' id='precoServico' name='precoServico' step='0.01' required>
                    </div>

                    <div class='form-group'>
                        <label for='categoriaServico'>Categoria</label>
                        <select class='form-control' id='categoriaServico' name='categoriaServico' required>
                            <option value=''>Selecione uma categoria</option>
                            <option value='Consultoria'>Consultoria</option>
                            <option value='Desenvolvimento'>Desenvolvimento</option>
                            <option value='Design'>Design</option>
                            <option value='Marketing'>Marketing</option>
                        </select>
                    </div>

                    <button type='submit' class='btn btn-success btn-lg btn-block mb-3'>Cadastrar Serviço</button>
                </form>

                <!-- Link para voltar para a página inicial -->
                <a href='index.php' class='btn btn-secondary btn-lg btn-block'>Voltar</a>
            </div>
        </div>
    </div>
";
?>
