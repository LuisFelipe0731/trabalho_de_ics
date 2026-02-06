<html>
<?php
	include('connection.php');
?>   

<body>

	<?php
	$titulo = $_POST['titulo'];
	$editora = $_POST['editora'];
	$data_lancamento = $_POST['data_lancamento'];
	$autor_id = $_POST['autor_id'];

	$query = "INSERT INTO livros
			(id, titulo, editora, data_lancamento, autor_id)
			VALUES (NULL,
			        '".$titulo."',
			        '".$editora."',
			        '".$data_lancamento."',
			        '".$autor_id."')";

	mysqli_query($db, $query) or die('Error in Database: '.mysqli_error($db));
	?>
	
	<script type="text/javascript">
		alert("Livro cadastrado com sucesso.");
		window.location = "index.php";
	</script>

</body>
</html>

