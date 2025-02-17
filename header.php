<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | BikeCicle</title>
</head>

<body>
    <header>
        <div id="LogoBike">
        <img src="<?= BASE_URL ?>/assets/Lyn2.png" alt="Logo da Bike" class="logo-img">

        </div>
        <nav>
            <ul id="menu">
                <li><a href="<?= BASE_URL ?>./index.php">Home</a></li>
                <li><a href="<?= BASE_URL ?>./agenda/login.php">Agende Agora</a></li>
                <li><a href="<?= BASE_URL ?>#servicos">Serviços</a></li>
                <li><a href="<?= BASE_URL ?>#quem-somos">Sobre Nós</a></li>

            </ul>
            <div class="menu-toggle" id="mobile-menu">
                <i class="fas fa-bars"></i> <!-- Ícone do menu hamburguer -->
            </div>
        </nav>
    </header>

    <script>
        const menuToggle = document.getElementById("mobile-menu");
        const menu = document.getElementById("menu");
        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("active");
        });
    </script>
</body>

</html>