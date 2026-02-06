<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$editora = $_POST['editora'];
$data_lancamento = $_POST['data_lancamento'];
$autor_id = $_POST['autor_id'];

include('connection.php');

$query = "UPDATE livros SET
	titulo = '$titulo',
	editora = '$editora',
	data_lancamento = '$data_lancamento',
	autor_id = $autor_id
WHERE id = '$id'";

$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script type="text/javascript">
	alert("Livro atualizado com sucesso.");
	window.location = "index.php";
</script>

</body>
</html>

