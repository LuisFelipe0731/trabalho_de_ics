<?php
include('connection.php');
include('header.php');
?>  

<body>

<h1 class="page-header">
	PHP CRUD <small>Detalhes do Livro</small>
</h1>

<?php
$query = "
SELECT livros.*, autores.nome AS autor
FROM livros
JOIN autores ON livros.autor_id = autores.id
WHERE livros.id = ".$_GET['id'];

$result = mysqli_query($db, $query) or die(mysqli_error($db));

while ($row = mysqli_fetch_array($result)) {
	$id = $row['id'];
	$titulo = $row['titulo'];
	$editora = $row['editora'];
	$data_lancamento = $row['data_lancamento'];
	$autor = $row['autor'];
}
?>

<h2>Detailed Record</h2>

<table>
	<tbody>
		<tr>
			<td><strong>ID:</strong></td>
			<td><?php echo $id; ?></td>
		</tr>
		<tr>
			<td><strong>Título:</strong></td>
			<td><?php echo $titulo; ?></td>
		</tr>
		<tr>
			<td><strong>Editora:</strong></td>
			<td><?php echo $editora; ?></td>
		</tr>
		<tr>
			<td><strong>Data de Lançamento:</strong></td>
			<td><?php echo $data_lancamento; ?></td>
		</tr>
		<tr>
			<td><strong>Autor:</strong></td>
			<td><?php echo $autor; ?></td>
		</tr>
	</tbody>
</table>

<br>
<a href="index.php">Return</a>

</body>
</html>

