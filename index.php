<?php
require_once('Classes/Noticia.php');

$news = new noticia;
$news1 = new noticia;
$news2 = new noticia;
$news3 = new noticia;
$news4 = new noticia;

$news->setTitulo('Cão salvo por pouco');
$news->setSubtitulo('Cachorra que estava presa há dias em contêiner é resgatada nos EUA por pouco!');
$news->setImage('"imagem/Cão.jpg"');

$news1->setTitulo('O fim dos Animais?');
$news1->setSubtitulo('Humanos alteraram tanto a Terra que animais migratórios têm risco de extinção.');
$news1->setImage('"imagem/Tartaruga.jpg" ');

$news2->setTitulo('Pombo espião sera verdade?');
$news2->setSubtitulo('Pombo suspeito de ser espião da China e detido por 8 meses é solto na Índia.');
$news2->setImage('"imagem/Pombo.jpg"');

$news3->setTitulo('Quanto tempo ainda tem?');
$news3->setSubtitulo('Quanto tempo seu cachorro vai viver? Meça seu focinho e descubra ja!!!');
$news3->setImage('"imagem/Dog.jpg"');

$news4->setTitulo('Nunca registrado antes!');
$news4->setSubtitulo('1º avistamento de tubarão-branco recém-nascido é registrado, é incrivel.');
$news4->setImage('"imagem/Tubarão.jfif"');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- liga esta pagina ao arquivo style.css -->
    <title>Noticias</title>
</head>

<body>
    <!-- aba de navegação superior leva para as regiões da pagina principal e para uma aba de perfil ainda não finalizada -->
    <!-- ela seguia atraves dos id denominados a cada sessão -->
    <nav class="Guia">
        <a href="#Noticias">Noticias</a>
        <a href="#Sobre">Sobre</a>
        <a href="#Contato">Contato</a>
        <a href="Perfil.php">Seu Perfil</a>
        <a href="?page=novo">Nova Noticia</a>
    </nav>

    <?php

    include("Novas-Nots/Config.php");

    switch (@$_REQUEST['page']) {

        case "novo":
            include("Novas-Nots/Formulario.php");
            break;
        case "listar":
            include("Listar-Noticia");
            break;
        case "Salvar":
            include("Novas-Nots/Salvar-Noticia.php");
            break;
        default:
    ?>

            <!-- nome do site feito em h1 para dar destaque -->
            <h1 class="Nomedosite">EstudosNoticias</h1>
            <!-- tag para definir a area das noticias -->
            <div class="hidden">
                <section class="Noticias" id="Noticias">
                    <!-- tag para definir cada noticia individualmente -->
                    <article>
                        <!-- Titulo feito em h2 para dar destaque  -->
                        <h2><?php echo $news1->getTitulo(); ?></h2>
                        <!-- subtitulo da noticia feito em h3 para dar um destaque menor que o titulo  -->
                        <h3><?php echo $news1->getSubtitulo(); ?> </h3>
                        <!-- Tag para associar uma imagem presente ou não no codigo a pagina e definir seu tamanho individualmente -->
                        <img src=<?php echo $news1->getImage(); ?>alt="tartaruga" width="200" height="150">
                        <!-- tag para pular/quebrar uma linha -->
                        <br>
                        <!-- tag para criar um link/botão que o manda para a noticia completa -->
                        <a href="Noticias/NT1.php">Veja Mais</a>
                    </article>

                    <article>
                        <h2><?php echo $news->getTitulo(); ?></h2>
                        <h3><?php echo $news->getSubtitulo(); ?> </h3>
                        <img src=<?php echo $news->getImage(); ?> alt="Cão" width="200" height="150">
                        <br>
                        <a href="Noticias/NT2.php">Veja Mais</a>
                    </article>

                    <article>
                        <h2><?php echo $news2->getTitulo(); ?></h2>
                        <h3><?php echo $news2->getSubtitulo(); ?> </h3>
                        <img src=<?php echo $news2->getImage(); ?> alt="Pombo" width="200" height="150">
                        <br>
                        <a href="Noticias/NT3.php">Veja Mais</a>
                    </article>

                    <Article>
                        <h2><?php echo $news3->getTitulo(); ?></h2>
                        <h3><?php echo $news3->getSubtitulo(); ?></h3>
                        <img src=<?php echo $news3->getImage(); ?> alt="Cãozinho" width="200" height="150">
                        <br>
                        <a href="Noticias/NT4.php">Veja Mais</a>
                    </article>

                    <article>
                        <h2><?php echo $news4->getTitulo(); ?></h2>
                        <h3><?php echo $news4->getSubtitulo(); ?></h3>
                        <img src=<?php echo $news4->getImage(); ?> alt="Tubarão" width="200" height="150">
                        <br>
                        <a href="Noticias/NT5.php">Veja Mais</a>
                    </article>

                </section>
            </div>
            <!-- sessão para definir a area do Sobre do site -->
            <section class="Sobre" id="Sobre">
                <!-- titulo -->
                <div>
                    <h2>Sobre</h2>
                    <!-- tag para escrever paragrafos -->
                    <p>Ola seja bem-vindo ao EstudosNoticias um site de noticias feito
                        na aula de html do Senac tramandai.

                        este site tem o proposito de exercitar tags do html e CSS atraves
                        da imitação de sites de noticias.
                    </p>
                </div>
            </section>
            <!-- sessão para definir a area de contato do site -->
            <section class="Contato" id="Contato">
                <!-- titulo -->
                <div>
                    <h2>Contato</h2>
                    <!-- informações de contato -->
                    <p>

                        Criador deste site: Eduardo Peruzzolo
                        <br>
                        telefone: 99999999
                        <br>
                        Caixa de email: teste teste
                    </p>
                </div>
            </section>
    <?php } ?>
</body>

<script src="scrypts.js"></script>

</html>