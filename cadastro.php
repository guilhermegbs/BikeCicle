<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/cadastro.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | BikeCicle</title>
</head>

<body>

    <?php include('header.php'); ?>

    <main>
        <h1>Cadastro</h1>
        <form action="dados.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: João da Silva" required><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="exemplo@dominio.com" required><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required><br>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" maxlength="15" required><br>

            <!-- Link para o script JavaScript externo -->
            <script src="./js/telefone.js"></script>

            <label for="data_nascimento">Data de nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required><br>

            <label for="genero">Gênero:</label>
            <select id="genero" name="genero" required>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select><br>

            <label for="termos">
                <input type="checkbox" id="termos" name="termos" required>
                Aceito os <a href="#" target="_blank">termos e condições</a>
            </label><br>

            <button type="submit">Cadastrar</button>
        </form>
        <p>Já tem uma conta? <a href="./login.php">Faça Login</a></p>

    </main>

    <?php include('./footer.php'); ?>

</body>

</html>