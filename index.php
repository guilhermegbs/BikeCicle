<?php 
    include_once 'agenda/config/appconfig.php';
    include_once 'header.php'; 
?> 

    <section id="tipos-bicicletas" class="blog">
        <h2>Modalidades de Ciclismo e Tipos de Bicicletas</h2>
        <p>Explore os diferentes tipos de bicicletas e como escolher a melhor para você. Aqui, você encontra tudo o que precisa saber sobre bikes. Oferecemos agendamento de serviços para a sua bicicleta, incluindo revisões completas, troca de peças e manutenção especializada, garantindo mais segurança e desempenho para suas pedaladas.</p>

        <article class="blog-post">
            <div class="blog-image">
                <img src="assets/bike de estrada.png" alt="Bicicleta de Estrada"> <!-- Caminho direto -->
            </div>
            <div class="blog-content">
                <h3>Bicicleta de Estrada</h3>
                <p>A bicicleta de estrada é ideal para longas distâncias em superfícies asfaltadas. Perfeita para quem busca velocidade e desempenho em competições ou passeios rápidos.</p>
                <a href="https://www.netshoes.com.br/especiais/bicicleta/modelos-bike-bic/mtb-bic-mod/road-bikes-saiba-tudo-sobre-as-bicicletas-de-estrada" class="read-more" target="_blank">Leia mais</a>
            </div>
        </article>

        <!-- Restante do conteúdo permanece igual -->

    </section>

    <section id="servicos" class="services-container">
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

    <section id="quem-somos" class="sobre-nos">
        <div class="container">
            <div class="quem-somos-conteudo">
                <div class="descricao balao-esquerda">
                    <h1 class="titulo">Quem Somos</h1>
                    <p>Somos apaixonados por bicicletas e dedicados a proporcionar experiências incríveis aos ciclistas, oferecendo os melhores serviços para suas aventuras sobre duas rodas.</p>
                    <img src="assets/bike4.jpeg" alt="Imagem da esquerda" class="imagem-balao"> <!-- Caminho direto -->
                </div>
                <div class="descricao balao-direita">
                    <h2 class="titulo">Nossa Missão</h2>
                    <p>Nossa missão é mais do que apenas consertar bicicletas. Queremos unir ciclistas em uma comunidade que compartilha paixão, conhecimentos e aventuras sobre duas rodas.</p>
                    <img src="assets/bike5.jpeg" alt="Imagem da direita" class="imagem-balao"> <!-- Caminho direto -->
                </div>
            </div>
        </div>
    </section>

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

    <section id="contato" class="contato">
        <div class="container">
            <h2>Entre em Contato</h2>
            <p>Tem dúvidas ou quer saber mais sobre nossos serviços? Entre em contato conosco! Estamos prontos para ajudar você.</p>
            <a href="#" class="btn">Fale Conosco</a>
        </div>
    </section>

    <?php include_once 'footer.php'; ?>