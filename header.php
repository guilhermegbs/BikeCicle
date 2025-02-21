<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    -->

    <link rel="stylesheet" href="<?= BASE_URL ?>/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">


    <!-- statics da aplicacao agenda  -->

    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'> 

    <!-- Bootstrap JS (incluindo popper e bundle)  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ìcones bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS Personalizado 
    <link rel='stylesheet' href='<?= BASE_URL ?>/agenda/static/css/styles.css'>  -->

    <!-- Javascript -->
    <script src="<?= BASE_URL ?>/agenda/static/js/scripts.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeCicle</title>
</head>

<body>
    <header>
        <div id="LogoBike">
        <img src="<?= BASE_URL ?>/assets/Lyn2.png" alt="Logo da Bike" class="logo-img">

        </div>
        <nav>
            <ul id="menu">
                <li><a href="<?= BASE_URL ?>/index.php">Home</a></li>
                <li><a href="<?= BASE_URL ?>/agenda/">Agende Agora</a></li>
                <li><a href="<?= BASE_URL ?>/index.php#servicos">Serviços</a></li>
                <li><a href="<?= BASE_URL ?>/index.php#quem-somos">Sobre Nós</a></li>

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