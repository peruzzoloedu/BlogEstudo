<?php
/* puxa as informaçoes da aba autor no Mysql baseado no id */

$sql = "SELECT * FROM autor WHERE idautor=" . $_REQUEST['id'];

$res = $conn->query($sql);
/* transforma as iformaçoes em dados utilizaveis */
$row = $res->fetch_object();

?>


<div class="formulario">
  <h1>Cadastro do Autor</h1>
  <!-- define oque acontecera ao clicar em enviar -->
  <form action="?page=Salvar-Autor" method="post">
    <!-- botao invisivel usado para definir a açao na aba de salvar -->
    <input type="hidden" name="Acao" value="Editar">

    <input type="hidden" name="id" value="<?php echo $row->idautor ?>">
    <!-- botao de texto para editar um autor/ row para mostrar como esta no sistema -->
    <label>Nome</label>
    <input type="text" name="Nome" class="form-control" value="<?php echo $row->nome ?>">
    <br>
    <label>Endereço</label>
    <input type="text" name="Endereco" class="form-control" value="<?php echo $row->endereco ?>">
    <br>
    <label>Telefone</label>
    <input type="text" name="Telefone" class="form-control" value="<?php echo $row->telefone ?>">
    <br>
    <label>Email</label>
    <input type="text" name="Email" class="form-control" value="<?php echo $row->email ?>">
    <!-- Botao de enviar -->
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

</div>