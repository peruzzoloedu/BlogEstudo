<?php
include("Novas-Nots/Config.php");


$sql = "SELECT * FROM noticias WHERE idnoticias=" . $_REQUEST['id'];
$inf = $conn->query($sql);
$row = $inf->fetch_object();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body>
    <div class="NTS">
        <h2><?php echo $row->titulo ?></h2>

        <h3><?php echo $row->subTitulo ?></h3>

        <p><?php echo $row->noticia ?></p>

        <img src="../<?php echo $row->imagem ?>" alt="tartarugaa" width="400" height="300">
        <br>
        <a href="../index.php">Voltar</a>

    </div>
</body>

</html>