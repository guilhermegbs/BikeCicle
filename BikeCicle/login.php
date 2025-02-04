<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/header.css"> 
    <link rel="stylesheet" href="./css/footer.css"> 
    <link rel="stylesheet" href="./css/cadastro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | BikeCicle</title>
</head>
<body>

<?php include('header.php'); ?>

<main>
    <h1>Login</h1>
    
    <!-- Mensagem de erro de login -->
    <?php if(isset($_GET['error'])): ?>
        <div class="error-message">
            <p style="color: red;">Login ou Senha inválidos</p>
        </div>
    <?php endif; ?>

    <form action="dadosLogin.php" method="post">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required minlength="6"><br>
        
        <button type="submit">Entrar</button>
    </form>
    
    <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
</main>

<?php include('footer.php'); ?>

</body>
</html>
