<?php
include('../connection.php');
include('../header.php');
?>

<body class="add-page">

<h2>Adicionar Novo Autor</h2>

<form method="post" action="add_post.php">

    <input placeholder="Nome do Autor" name="nome" required><br><br>

    <input placeholder="Nacionalidade" name="nacionalidade" required><br><br>

    <button type="submit">Salvar</button>
    <a href="index.php">Voltar</a>

</form>

</body>
</html>
