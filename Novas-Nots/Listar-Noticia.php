<link rel="stylesheet" href="../style.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<h1 class='list'>Lista de Noticias</h1>
<?php

$sql = "SELECT * FROM noticias";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {

  echo "<table class='table table-hover table-striped table-bordered'>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Titulo</th>";
  echo "<th>Subtitulo</th>";
  echo "<th>Ações</th>";
  while ($row = $res->fetch_object()) {
    echo "<tr>";
    echo "<td>" . $row->idnoticias . "</td>";
    echo "<td>" . $row->titulo . "</td>";
    echo "<td>" . $row->subTitulo . "</td>";
    echo "<td>
    <button onclick=\"location.href='?page=Editar&id=" . $row->idnoticias . "'; \">Editar</button>
    <button onclick=\"if(confirm('Você deseja excluir essa noticia?')){location.href='?page=Salvar&Acao=Excluir&id=" . $row->idnoticias . "';}else{false;}\">Deletar</button>
    </td>";
    echo "</tr>";
  }

  echo "</table>";
} else {
  echo "<p>Não encontramos nenhuma noticia!</p>";
}

?>

<a href="index.php">Voltar</a>