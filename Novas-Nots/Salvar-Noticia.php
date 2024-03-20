<?php

switch ($_REQUEST["Acao"]) {
  case 'Cadastrar':
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $noticia = $_POST["noticia"];
    $image = $_POST["image"];

    $sql = "INSERT INTO noticias (titulo, subtitulo, noticia, imagem)
    VALUES ('{$titulo}', '{$subtitulo}', '{$noticia}', '{$image}')";

    $res = $conn->query($sql);

    echo "<script>location.href='index.php';</script>";
    break;

  case 'Editar':
    $titulo = $_POST['titulo'];
    $subTitulo = $_POST['subtitulo'];
    $noticia = $_POST['noticia'];
    $image = $_POST['image'];

    $sql = "UPDATE noticias SET titulo='{$titulo}', subTitulo='{$subTitulo}', noticia='{$noticia}', imagem='{$image}' WHERE idnoticias=" . $_REQUEST['id'];

    $res =  $conn->query($sql);

    if ($res == true) {
      echo "<script>alert('Cadastro realizado com sucesso!');</script>";
      echo "<script>location.href='index.php';</script>";
    }
    break;

  case 'Excluir':
    $sql = "DELETE FROM noticias WHERE idnoticias=" . $_REQUEST['id'];
    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Cadastro excluido com sucesso');</script>";
      print "<script>location.href='index.php';</script>";
    } else {
      print "<script>alert('Não foi possivel excluir');</script>";
      print "<script>location.href='index.php';</script>";
    }
    break;
}
