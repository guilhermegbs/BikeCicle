<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= BASE_URL ?>./css/footer.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeCicle - Footer</title>
</head>

<body>
    <!-- Conteúdo do Footer -->
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
            <img src="<?= BASE_URL ?>/assets/Lyn2.png" alt="Logo da Bike" class="logo-img">


                <div id="footer_social_media">
                    <a href="https://www.instagram.com" class="footer-link" id="instagram" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com" class="footer-link" id="facebook" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://wa.me/5511999999999" class="footer-link" id="whatsapp" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <div class="footer-links">
                <ul class="footer-list">
                    <li><h3>Serviços</h3></li>
                    <li><a href="agendamento" class="footer-link">Agendamento de Bicicletas</a></li>
                    <li><a href="/entrega" class="footer-link">Entrega e Coleta</a></li>
                    <li><a href="/manutencao" class="footer-link">Manutenção Rápida</a></li>
                </ul>

                <ul class="footer-list">
                    <li><h3>Suporte</h3></li>
                    <li><a href="como-funciona" class="footer-link">Como Funciona</a></li>
                    <li><a href="politica-privacidade" class="footer-link">Política de Privacidade</a></li>
                    <li><a href="termos-uso" class="footer-link">Termos de Uso</a></li>
                </ul>
            </div>

            <div id="footer_subscribe">
                <h3>Assine nosso boletim</h3>
                <p>Receba novidades sobre nossos serviços de agendamento de bikes, ofertas e muito mais!</p>
                <div id="input_group">
                    <input type="email" id="email" placeholder="Digite seu e-mail">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyrigth">
            &#169; 2024 BikeCicle. Todos os direitos reservados.
        </div>
    </footer>
</body>

</html>
