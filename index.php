<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/style.css">

    <title>BikeCicle</title>
</head>

<body>

    <!-- Incluir cabeçalho -->
    <?php include('header.php'); ?>



    <section id="tipos-bicicletas" class="blog">
        <h2>Modalidades de Ciclismo e Tipos de Bicicletas</h2>
        <p>Explore os diferentes tipos de bicicletas e como escolher a melhor para você. Aqui, você encontra tudo o que precisa saber sobre bikes. Oferecemos agendamento de serviços para a sua bicicleta, incluindo revisões completas, troca de peças e manutenção especializada, garantindo mais segurança e desempenho para suas pedaladas.</p>

        <article class="blog-post">
            <div class="blog-image">
                <img src="./assets/bike de estrada.png" alt="Bicicleta de Estrada">
            </div>
            <div class="blog-content">
                <h3>Bicicleta de Estrada</h3>
                <p>A bicicleta de estrada é ideal para longas distâncias em superfícies asfaltadas. Perfeita para quem busca velocidade e desempenho em competições ou passeios rápidos.</p>
                <a href="https://www.netshoes.com.br/especiais/bicicleta/modelos-bike-bic/mtb-bic-mod/road-bikes-saiba-tudo-sobre-as-bicicletas-de-estrada" class="read-more" target="_blank">Leia mais</a>
            </div>
        </article>

        <article class="blog-post">
            <div class="blog-image">
                <img src="./assets/mountain bike.png" alt="Mountain Bike">
            </div>
            <div class="blog-content">
                <h3>Mountain Bike</h3>
                <p>Projetada para terrenos irregulares, a MTB possui pneus largos e suspensão, proporcionando segurança e conforto em trilhas e terrenos difíceis.</p>
                <a href="https://ge.globo.com/olimpiadas/guia/2024/07/24/c-ciclismo-mountain-bike-regras-recordes-e-historia.ghtml" class="read-more" target="_blank">Leia mais</a>
            </div>
        </article>

        <article class="blog-post">
            <div class="blog-image">
                <img src="./assets/bicicleta-pro-x-bmx-cr-defender-aro-20-rainbow-6659fee14adf2-removebg-preview.png" alt="BMX">
            </div>
            <div class="blog-content">
                <h3>BMX</h3>
                <p>A BMX é perfeita para manobras radicais e corridas em pistas de terra. Compacta e resistente, ideal para quem gosta de desafios e competições.</p>
                <a href="https://www.netshoes.com.br/blog/esportes/post/o-que-e-bmx" class="read-more" target="_blank">Leia mais</a>
            </div>
        </article>

        <article class="blog-post">
            <div class="blog-image">
                <img src="./assets/frente-removebg-preview.png" alt="Bicicleta Urbana">
            </div>
            <div class="blog-content">
                <h3>Bicicleta Urbana</h3>
                <p>Ideal para o dia a dia nas cidades, a bicicleta urbana é confortável e prática, com design fácil de manobrar e manutenção simples.</p>
                <a href="https://bikeregistrada.com.br/blog/bicicleta-monark-tudo-sobre-essa-marca-que-marcou-a-historia/" class="read-more" target="_blank">Leia mais</a>
            </div>
        </article>

        <article class="blog-post">
            <div class="blog-image">
                <img src="./assets/106666-removebg-preview.png" alt="Bicicleta Tandem">
            </div>
            <div class="blog-content">
                <h3>Bicicleta Tandem</h3>
                <p>A bicicleta tandem é feita para dois ciclistas. Ela proporciona uma experiência de ciclismo em equipe, onde dois podem pedalar juntos, sincronizados.</p>
                <a href="https://www.bazarbikes.com.br/glossario-ciclismo/o-que-e-bicicleta-tandem/?srsltid=AfmBOopZCDEuJ05OkwZfq3rMDZQUB7hGByc25NyJ6Uu2TitdfJYKmmMU" class="read-more" target="_blank">Leia mais</a>
            </div>
        </article>
    </section>

    <!-- Serviços oferecidos -->
    <section class="services-container">
        <div class="service-card">
            <i class="fas fa-tools service-icon"></i>
            <h3>Manutenção</h3>
            <p>Realizamos manutenção completa para garantir o melhor desempenho da sua bike.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-check-circle service-icon"></i>
            <h3>Revisão</h3>
            <p>Inspecionamos sua bicicleta para assegurar segurança e eficiência.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-cogs service-icon"></i>
            <h3>Troca de Peças</h3>
            <p>Substituímos peças desgastadas para manter sua bike sempre nova.</p>
        </div>
    </section>

    <!-- Seção Quem Somos -->
    <section id="quem-somos" class="sobre-nos">
        <div class="container">
            <div class="quem-somos-conteudo">
                <div class="descricao">
                    <h1 class="titulo">Quem Somos</h1>
                    <p>Somos apaixonados por bicicletas e dedicados a proporcionar experiências incríveis aos ciclistas, oferecendo os melhores serviços para suas aventuras sobre duas rodas.</p>
                </div>
                <div class="foto">
                    <img src="./assets/bike4.jpeg" alt="" class="imagem-quemsomos">
                </div>
            </div>
        </div>
    </section>

    <section id="missao" class="missao">
        <div class="container">
            <h2 class="titulo">Nossa Missão</h2>
            <p class="descricao">Nossa missão é mais do que apenas consertar bicicletas. Queremos unir ciclistas em uma comunidade que compartilha paixão, conhecimentos e aventuras sobre duas rodas.</p>


            <div class="foto">
                <img src="./assets/bike5.jpeg" alt="" class="imagem-missao">
            </div>

    </section>


    <!-- Seção Valores -->
    <section id="valores" class="valores">
        <div class="container">
            <h2 class="titulo">Nossos Valores</h2>
            <div class="valores-container">
                <div class="valor">
                    <i class="fa fa-heart"></i>
                    <h3>Paixão</h3>
                    <p>Amamos o que fazemos e buscamos sempre oferecer o melhor para os nossos clientes e a comunidade de ciclistas.</p>
                </div>
                <div class="valor">
                    <i class="fa fa-cogs"></i>
                    <h3>Inovação</h3>
                    <p>Investimos constantemente em novas tecnologias e soluções para melhorar a experiência dos ciclistas.</p>
                </div>
                <div class="valor">
                    <i class="fa fa-users"></i>
                    <h3>Comunidade</h3>
                    <p>Acreditamos no poder da comunidade e trabalhamos para fomentar um ambiente colaborativo entre ciclistas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="contato">
        <div class="container">
            <h2>Entre em Contato</h2>
            <p>Tem dúvidas ou quer saber mais sobre nossos serviços? Entre em contato conosco! Estamos prontos para ajudar você.</p>
            <a href="login.php" class="btn">Fale Conosco</a>
        </div>
    </section>

    <!-- Incluir rodapé -->
    <?php include('footer.php'); ?>

</body>

</html>