<?php
/* chama o arquivo que nos conecta com o Mysql */

include("Novas-Nots/Config.php");

/* puxa as informaçoes da aba noticias no Mysql */

$sql = "SELECT * FROM noticias";
$inf = $conn->query($sql);
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
        <a href="?page=Autor">Novo Autor</a>
        <a href="?page=Novo">Nova Noticia</a>
        <a href="?page=ListarA">Listar Autor</a>
        <a href="?page=Listar">Listar Noticia</a>
    </nav>

    <?php

    /* procura informação na url e age baseado nela */

    switch (@$_REQUEST['page']) {

        case "Novo":
            include("Novas-Nots/Formulario.php");
            break;
        case "Listar":
            include("Novas-Nots/Listar-Noticia.php");
            break;
        case "Salvar":
            include("Novas-Nots/Salvar-Noticia.php");
            break;
        case "Editar":
            include("Novas-Nots/Editar-Noticia.php");
            break;
        case "Autor":
            include("Novos-Autores/Formu.php");
            break;
        case "Salvar-Autor":
            include("Novos-Autores/Salvar-Autor.php");
            break;
        case "ListarA":
            include("Novos-Autores/Listar-Autor.php");
            break;
        case "EditarA":
            include("Novos-Autores/Editar-Autor.php");
            break;
        default:
    ?>

            <!-- nome do site feito em h1 para dar destaque -->
            <h1 class="Nomedosite">EstudosNoticias</h1>
            <!-- tag para definir a area das noticias -->
            <div class="hidden">
                <section class="Noticias" id="Noticias">
                    <!-- tag para definir cada noticia individualmente -->
                    <?php while ($row = $inf->fetch_object()) {
                        /* transforma as iformaçoes em dados utilizaveis */
                    ?>
                        <article>
                            <!-- Titulo feito em h2 para dar destaque  -->
                            <h2><?php echo $row->titulo /* mostra a informaçao obtida na tela */  ?></h2>
                            <!-- subtitulo da noticia feito em h3 para dar um destaque menor que o titulo  -->
                            <h3><?php echo $row->subTitulo ?> </h3>
                            <!-- Tag para associar uma imagem presente ou não no codigo a pagina e definir seu tamanho individualmente -->
                            <img src="<?php echo $row->imagem ?>" alt="tartaruga" width="200" height="150">
                            <!-- tag para pular/quebrar uma linha -->
                            <br>
                            <!-- tag para criar um link/botão que o manda para a noticia completa -->
                            <a href="NT.php/?id=<?php echo $row->idnoticias; ?>">Veja Mais</a>
                        </article>
                    <?php }  ?>

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