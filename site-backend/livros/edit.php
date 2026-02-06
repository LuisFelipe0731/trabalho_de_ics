<?php
include('connection.php');
include('header.php');
?>

<body>

<h1 class="page-header">
	PHP CRUD <small>Editar Livro</small>
</h1>

<?php
$query = "SELECT * FROM livros WHERE id = ".$_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));

while ($row = mysqli_fetch_array($result)) {
	$id = $row['id'];
	$titulo = $row['titulo'];
	$editora = $row['editora'];
	$data_lancamento = $row['data_lancamento'];
	$autor_id = $row['autor_id'];
}
?>

<?php
$autores = mysqli_query($db, "SELECT * FROM autores");
?>

<h2>Edit Record</h2>

<form method="post" action="edit_post.php">

	<input type="hidden" name="id" value="<?php echo $id; ?>" />

	<input placeholder="Título" name="titulo"
	       value="<?php echo $titulo; ?>"><br/><br/>

	<input placeholder="Editora" name="editora"
	       value="<?php echo $editora; ?>"><br/><br/>

	<input type="date" name="data_lancamento"
	       value="<?php echo $data_lancamento; ?>"><br/><br/>

	<select name="autor_id">
		<?php while ($a = mysqli_fetch_assoc($autores)) { ?>
			<option value="<?php echo $a['id']; ?>"
				<?php if ($a['id'] == $autor_id) echo 'selected'; ?>>
				<?php echo $a['nome']; ?>
			</option>
		<?php } ?>
	</select><br/><br/>

	<button type="submit">Update Record</button>
	<a href="index.php">Return</a>

</form>

</body>
</html>

