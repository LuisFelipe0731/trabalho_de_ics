
<?php
include('connection.php');
include('header.php');
?>  

<body>

<h1 class="page-header">
	PHP CRUD <small>Editar Autor</small>
</h1>

<?php
$query = "SELECT * FROM autores WHERE id = ".$_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));

while ($row = mysqli_fetch_array($result)) {
	$id = $row['id'];
	$nome = $row['nome'];
	$nacionalidade = $row['nacionalidade'];
}
?>

<h2>Edit Record</h2>

<form method="post" action="edit_post.php">

	<input type="hidden" name="id" value="<?php echo $id; ?>" />

	<input placeholder="Nome do Autor"
	       name="nome"
	       value="<?php echo $nome; ?>"><br/><br/>

	<input placeholder="Nacionalidade"
	       name="nacionalidade"
	       value="<?php echo $nacionalidade; ?>"><br/><br/>

	<button type="submit">Update Record</button>
	<a href="index.php">Return</a>

</form>

</body>
</html>
