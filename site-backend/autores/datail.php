<?php
include('connection.php');
include('header.php');
?>  

<body>

<h1 class="page-header">
	PHP CRUD <small>Detalhes do Autor</small>
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

<h2>Autor</h2>

<table border="1">
	<tbody>
		<tr>
			<td><strong>ID:</strong></td>
			<td><?php echo $id; ?></td>
		</tr>
		<tr>
			<td><strong>Nome:</strong></td>
			<td><?php echo $nome; ?></td>
		</tr>
		<tr>
			<td><strong>Nacionalidade:</strong></td>
			<td><?php echo $nacionalidade; ?></td>
		</tr>
	</tbody>
</table>

<br>
<a href="index.php">Voltar</a>

</body>
</html>

