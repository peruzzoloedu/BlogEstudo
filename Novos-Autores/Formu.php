<!-- formulario para cadastrar um novo autor -->
<!-- diz oque aconte ao clicar em enviar/ passa uma informaçao pelo metodo post -->
<form action="?page=Salvar-Autor" method="post" class="Formulario2">
    <input type="hidden" name="Acao" value="Cadastrar">

    <!-- botao de texto com um label definindo sua utilidade -->
    <label for="Nome">Nome:</label>
    <input type="text" name="Nome">

    <label for="Endereco">Endereço:</label>
    <input type="text" name="Endereco">
    <br>
    <label for="Telefone">Telefone:</label>
    <input type="text" name="Telefone">

    <label for="Email">Email:</label>
    <input type="text" name="Email">
    <br>
    <input type="submit" value="Enviar" class="Enviar">
    <br>
    <!-- link para voltar -->
    <a href="index.php">Voltar</a>
</form>