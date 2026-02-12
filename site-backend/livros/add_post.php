<?php
include('../connection.php');

$titulo = $_POST['titulo'];
$editora = $_POST['editora'];
$data = $_POST['data_lancamento'];
$autor_id = $_POST['autor_id'];

$query = "INSERT INTO livros
          (id, titulo, editora, data_lancamento, autor_id)
          VALUES (NULL, '$titulo', '$editora', '$data', '$autor_id')";

mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script>
alert("Livro adicionado com sucesso!");
window.location = "index.php";
</script>
