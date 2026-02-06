<?php
    include('connection.php');
    include('header.php');
?>  

<body>
	<h1 class="page-header">
		PHP CRUD <small>Create, Read, Update and Delete</small>
	</h1>

	<h2>Add New Book</h2>
	<br/>

	<form method="post" action="add_post.php">
                            
		<input type="text" name="titulo" placeholder="Título do livro" required>
		<br/><br/>

		<input type="text" name="editora" placeholder="Editora" required>
		<br/><br/>

		<input type="date" name="data_lancamento" required>
		<br/><br/>

		<input type="number" name="autor_id" placeholder="ID do Autor" required>
		<br/><br/>

		<button type="submit" class="btn btn-success">Salvar</button>&nbsp;
		<button type="reset" class="btn btn-warning">Limpar</button>&nbsp;
		<a class="btn btn-info" href="index.php">Voltar</a>

	</form>  
</body>
</html>

