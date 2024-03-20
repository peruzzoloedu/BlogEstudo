<?php

$sql = "SELECT * FROM noticias WHERE idnoticias=" . $_REQUEST['id'];

$res = $conn->query($sql);
$row = $res->fetch_object();

?>


<div class="formulario">
  <h1>Cadastro de Noticia</h1>
  <form action="?page=Salvar" method="post">
    <input type="hidden" name="Acao" value="Editar">
    <input type="hidden" name="id" value="<?php echo $row->idnoticias ?>">
    <label>Titulo</label>
    <input type="text" name="titulo" class="form-control" value="<?php echo $row->titulo ?>">
    <br>
    <label>SubTitulo</label>
    <input type="text" name="subtitulo" class="form-control" value="<?php echo $row->subTitulo ?>">
    <br>
    <label>Noticia</label>
    <textarea type="text" name="noticia" class="form-control"> <?php echo $row->noticia ?></textarea>
    <br>
    <label>Caminho da Imagem</label>
    <input type="text" name="image" class="form-control" value="<?php echo $row->imagem ?>">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

</div>