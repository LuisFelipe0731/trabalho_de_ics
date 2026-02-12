<?php
include('../connection.php');
include('../header.php');

$id = $_GET['id'];

$query = "SELECT * FROM livros WHERE id = $id";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

$autores = mysqli_query($db, "SELECT * FROM autores");
?>

<body>

<h2>Editar Livro</h2>

<form method="post" action="edit_post.php">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <input name="titulo" value="<?php echo $row['titulo']; ?>"><br><br>

    <input name="editora" value="<?php echo $row['editora']; ?>"><br><br>

    <input type="date" name="data_lancamento"
           value="<?php echo $row['data_lancamento']; ?>"><br><br>

    <label>Autor:</label><br>
    <select name="autor_id">
        <?php while($autor = mysqli_fetch_assoc($autores)) { ?>
            <option value="<?php echo $autor['ID']; ?>"
                <?php if($autor['ID'] == $row['autor_id']) echo "selected"; ?>>
                <?php echo $autor['nome']; ?>
            </option>
        <?php } ?>
    </select>
    <br><br>

    <button type="submit">Atualizar</button>
    <a href="index.php">Voltar</a>

</form>

</body>
</html>
