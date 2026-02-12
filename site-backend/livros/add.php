<?php
include('../connection.php');
include('../header.php');

// Buscar autores para o select
$autores = mysqli_query($db, "SELECT * FROM autores");
?>

<body>

<h2>Adicionar Novo Livro</h2>

<form method="post" action="add_post.php">

    <input placeholder="Título" name="titulo" required><br><br>

    <input placeholder="Editora" name="editora"><br><br>

    <label>Data de Lançamento:</label><br>
    <input type="date" name="data_lancamento"><br><br>

    <label>Autor:</label><br>
    <select name="autor_id" required>
        <option value="">Selecione</option>
        <?php while($autor = mysqli_fetch_assoc($autores)) { ?>
            <option value="<?php echo $autor['ID']; ?>">
                <?php echo $autor['nome']; ?>
            </option>
        <?php } ?>
    </select>
    <br><br>

    <button type="submit">Salvar</button>
    <a href="index.php">Voltar</a>

</form>

</body>
</html>
