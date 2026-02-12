<?php
include('../connection.php');

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$editora = $_POST['editora'];
$data = $_POST['data_lancamento'];
$autor_id = $_POST['autor_id'];

$query = "UPDATE livros SET
            titulo = '$titulo',
            editora = '$editora',
            data_lancamento = '$data',
            autor_id = '$autor_id'
          WHERE id = '$id'";

mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script>
alert("Livro atualizado com sucesso!");
window.location = "index.php";
</script>
