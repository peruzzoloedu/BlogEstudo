<form action="?page=Salvar" method="post" class="Formulario">
    <input type="hidden" name="Acao" value="Cadastrar">

    <label for="Titulo">Titulo:</label>
    <input type="text" name="titulo">

    <label for="Subtitulo">subtitulo:</label>
    <input type="text" name="subtitulo">
    <br>
    <textarea placeholder="Noticia" name="noticia" id="Text-noticia" cols="100" rows="15"></textarea>
    <br>
    <label for="Imagem">Caminho Imagem:</label>
    <input type="text" name="image">
    <br>
    <label for="Autor">Nome do Autor:</label>
    <input type="text" name="autor">
    <br>
    <input type="submit" value="Enviar" class="Enviar">
    <br>
    <a href="index.php">Voltar</a>
</form>