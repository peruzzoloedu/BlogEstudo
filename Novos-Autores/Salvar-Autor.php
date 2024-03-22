<?php

switch ($_REQUEST["Acao"]) {
  case 'Cadastrar':
    $nome = $_POST["Nome"];
    $endereco = $_POST["Endereco"];
    $telefone = $_POST["Telefone"];
    $email = $_POST["Email"];

    $sql = "INSERT INTO autor (nome, endereco, telefone, email)
    VALUES ('{$nome}', '{$endereco}', '{$telefone}', '{$email}')";

    $res = $conn->query($sql);

    echo "<script>location.href='index.php';</script>";
    break;
    case 'Editar':
        $nome = $_POST['Nome'];
        $endereco = $_POST['Endereco'];
        $telefone = $_POST['Telefone'];
        $email = $_POST['Email'];
    
        $sql = "UPDATE autor SET nome='{$nome}', endereco='{$endereco}', telefone='{$telefone}', email='{$email}' WHERE idautor=" . $_REQUEST['id'];
    
        $res =  $conn->query($sql);
    
        if ($res == true) {
          echo "<script>alert('Cadastro realizado com sucesso!');</script>";
          echo "<script>location.href='index.php';</script>";
        }
        break;
    
      case 'Excluir':
        $sql = "DELETE FROM autor WHERE idautor=" . $_REQUEST['id'];
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
?>