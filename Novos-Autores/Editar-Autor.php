<?php

$sql = "SELECT * FROM autor WHERE idautor=" . $_REQUEST['id'];

$res = $conn->query($sql);
$row = $res->fetch_object();

?>


<div class="formulario">
  <h1>Cadastro do Autor</h1>
  <form action="?page=Salvar-Autor" method="post">
    <input type="hidden" name="Acao" value="Editar">
    <input type="hidden" name="id" value="<?php echo $row->idautor ?>">
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
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

</div>