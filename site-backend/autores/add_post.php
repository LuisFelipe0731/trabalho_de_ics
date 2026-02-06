<html>
<?php
	include('connection.php');
?>   

<body>

	<?php
	$nome = $_POST['nome'];
	$nacionalidade = $_POST['nacionalidade'];

	$query = "INSERT INTO autores
			(id, nome, nacionalidade)
			VALUES (NULL, '".$nome."', '".$nacionalidade."')";

	mysqli_query($db, $query) or die('Error in Database: '.mysqli_error($db));
	?>
	
	<script type="text/javascript">
		alert("Autor cadastrado com sucesso.");
		window.location = "index.php";
	</script>

</body>
</html>


