<?php


    class ClienteView
    {

        function exibirFormularioCadastro()
        {
            echo "
  <<h1>Cadastro</h1>
<form action='dados.php' method='post'>
    <label for='nome'>Nome:</label>
    <input type='text' id='nome' name='nome' placeholder='Ex: João da Silva' required><br>

    <label for='email'>E-mail:</label>
    <input type='email' id='email' name='email' placeholder='exemplo@dominio.com' required><br>

    <label for='senha'>Senha:</label>
    <input type='password' id='senha' name='senha' placeholder='Crie uma senha' required><br>

    <label for='telefone'>Telefone:</label>
    <input type='tel' id='telefone' name='telefone' placeholder='(00) 00000-0000' pattern='\(\d{2}\) \d{5}-\d{4}' required><br>

    <label for='data_nascimento'>Data de nascimento:</label>
    <input type='date' id='data_nascimento' name='data_nascimento' required><br>

    <label for='genero'>Gênero:</label>
    <select id='genero' name='genero' required>
        <option value='masculino'>Masculino</option>
        <option value='feminino'>Feminino</option>
        <option value='outro'>Outro</option>
    </select><br>

    <label for='termos'>
        <input type='checkbox' id='termos' name='termos' required>
        Aceito os <a href='#' target='_blank'>termos e condições</a>
    </label><br>

    <button type='submit'>Cadastrar</button>
</form>

            <button type='submit'>Cadastro</button>
        </form>
        ";
    } 


}


?>