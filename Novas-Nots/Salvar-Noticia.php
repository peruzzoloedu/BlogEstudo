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
    break;
}
