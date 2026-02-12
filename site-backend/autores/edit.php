<?php
include('../connection.php');  
include('../header.php');

if (!isset($_GET['id'])) {
    die("ID não informado.");
}

$id = intval($_GET['id']);

$query = "SELECT * FROM autores WHERE id = $id";
$result = mysqli_query($db, $query) or die(mysqli_error($db));
$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("Autor não encontrado.");
}

?>

<body>

<h2>Editar Autor</h2>
<form method="post" action="edit_post.php">

    <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">

    <label>Nome</label><br>
    <input type="text" name="nome"
           value="<?php echo $row['nome']; ?>" required><br><br>

    <label>Nacionalidade</label><br>
    <input type="text" name="nacionalidade"
           value="<?php echo $row['nacionalidade']; ?>" required><br><br>

    <button type="submit">Atualizar</button>
    <a href="index.php">Voltar</a>

</form>

</body>
</html>
